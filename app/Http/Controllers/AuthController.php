<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = DB::table('users')
            ->where('email', $validated['email'])
            ->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()->withInput($request->only('email'))
                ->withErrors(['email' => 'The email address or password is incorrect.']);
        }

        if (! (bool) $user->is_active) {
            return back()->withInput($request->only('email'))
                ->withErrors(['email' => 'This account is inactive. Please contact an administrator.']);
        }

        $request->session()->regenerate();
        $request->session()->put('user_id', $user->id);
        $request->session()->put('user_name', $user->name);
        $request->session()->put('user_email', $user->email);

        return redirect()->route('dashboard');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        DB::table('users')->insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function dashboard(Request $request)
    {
        $userId = $request->session()->get('user_id');

        if (!$userId) {
            return redirect()->route('login')
                ->withErrors(['auth' => 'Please log in to access the dashboard.']);
        }

        $user = DB::table('users')->where('id', $userId)->first();

        if (!$user) {
            $request->session()->flush();
            return redirect()->route('login')
                ->withErrors(['auth' => 'Your account could not be found.']);
        }

        if (! (bool) $user->is_active) {
            $request->session()->flush();
            return redirect()->route('login')
                ->withErrors(['auth' => 'This account is inactive.']);
        }

        $activeUsers = DB::table('users')
            ->where('is_active', true)
            ->orderBy('id')
            ->get();

        return view('auth.dashboard', [
            'user' => $user,
            'activeUsers' => $activeUsers,
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
