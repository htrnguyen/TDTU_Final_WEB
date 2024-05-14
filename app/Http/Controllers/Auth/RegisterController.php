<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegisteredSuccessfully;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Home' => route('home'),
            'Create an account' => null
        ];

        return view('auth.register', compact('breadcrumbs'));
    }

    public function store()
    {
        try {
            $attributes = request()->validate([
                'last_name' => ['required', 'string', 'max:255'],
                'first_name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'address' => ['nullable', 'string', 'max:255'],
                'gender' => ['nullable', 'string', 'max:255'],
                'date_of_birth' => ['nullable', 'date'],
                'phone_number' => ['nullable', 'string', 'max:20'],
            ]);

            $user = User::create($attributes);

            if (!$user) {
                Log::error('Cannot create account');
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot create account'
                ]);
            }
            
            $user->notify(new VerifyEmailNotification($user));

            if (Auth::attempt($attributes)) {
                // Authentication passed
                request()->session()->regenerate();
                return redirect()->intended();
            }


            return redirect()->route('login')->with('message', 'Your account have been created. Please check your email to verify your accout');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update()
    {
    }

    public function destroy()
    {
        if ($user = Auth::user()) {
            // User::destroy($user->id);
            dd($user);
        }


        // Optionally, logout the user after deletion
        Auth::logout();

        return response()->json(['message' => 'User deleted successfully']);
    }
}
