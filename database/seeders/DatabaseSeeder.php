<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $accounts = [
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'password' => Hash::make('password123'),
                'is_active' => true,
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'password' => Hash::make('password123'),
                'is_active' => true,
            ],
            [
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'password' => Hash::make('password123'),
                'is_active' => false,
            ],
        ];

        foreach ($accounts as $account) {
            $account['created_at'] = now();
            $account['updated_at'] = now();

            DB::table('users')->updateOrInsert(
                ['email' => $account['email']],
                $account
            );
        }

        $this->call(ProductSeeder::class);
    }
}
