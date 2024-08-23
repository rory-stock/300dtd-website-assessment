<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Delete all users except the admin
        $this->deleteOtherUsers();

        // If there is no admin account, create one
        if (User::all()->count() == 0) {
            $this->createAdmin();
        }

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/events');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    // Create the admin account if it does not exist
    private function createAdmin()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@rorystock.com',
            'password' => Hash::make('adminadmin'),
            'created_at' => now()
        ]);
    }

    // Delete all users except the admin
    private function deleteOtherUsers()
    {
        DB::table('users')->where('email', '!=', 'admin@rorystock.com')->delete();
    }
}
