<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ManualAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_redirects_guests_to_login(): void
    {
        $this->get('/dashboard')
            ->assertRedirect('/login');
    }

    public function test_active_user_can_login_and_view_active_users(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'password' => Hash::make('password123'),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'password' => Hash::make('password123'),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'password' => Hash::make('password123'),
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $this->post('/login', [
            'email' => 'juan@example.com',
            'password' => 'password123',
        ])->assertRedirect('/dashboard')
            ->assertSessionHas('user_id');

        $this->get('/dashboard')
            ->assertOk()
            ->assertSee('Welcome, Juan Dela Cruz!')
            ->assertSee('Juan Dela Cruz')
            ->assertSee('Maria Santos')
            ->assertDontSee('Pedro Reyes');
    }

    public function test_inactive_user_cannot_login(): void
    {
        DB::table('users')->insert([
            'name' => 'Pedro Reyes',
            'email' => 'pedro@example.com',
            'password' => Hash::make('password123'),
            'is_active' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->from('/login')->post('/login', [
            'email' => 'pedro@example.com',
            'password' => 'password123',
        ])->assertRedirect('/login')
            ->assertSessionHasErrors([
                'email' => 'This account is inactive. Please contact an administrator.',
            ])
            ->assertSessionMissing('user_id');
    }

    public function test_logout_ends_session_and_protects_dashboard(): void
    {
        $userId = DB::table('users')->insertGetId([
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->withSession(['user_id' => $userId])
            ->post('/logout')
            ->assertRedirect('/login')
            ->assertSessionMissing('user_id')
            ->assertSessionHas('success');

        $this->get('/dashboard')->assertRedirect('/login');
    }
}
