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
        // Validate the request
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

        // Check if the credentials are correct
        if (auth()->attempt($credentials)) {

            // Regenerate the session
            $request->session()->regenerate();

            // Redirect to the events page
            return redirect()->intended('/events');
        }

        // If the credentials are incorrect, return back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Logout the user
    public function logout()
    {
        auth()->logout();

        // Invalidate the session
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        // Redirect to the home page
        return redirect('/');
    }

    // Create the admin account if it does not exist
    private function createAdmin()
    {
        DB::table('users')->insert([
            'name' => config('admin.name'),
            'email' => config('admin.email'),
            'password' => Hash::make(config('admin.password')),
            'created_at' => now()
        ]);
    }

    // Delete all users except the admin
    private function deleteOtherUsers()
    {
        DB::table('users')->where('email', '!=', config('admin.email'))->delete();
    }
}
