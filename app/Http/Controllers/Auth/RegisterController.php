<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegisteredSuccessfully;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Support\Facades\Auth;
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
        $attributes = request()->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string', 'max:20'],
        ]);

        // dd($attributes);     
        
        // Save user avatar
        // if (request()->hasFile('avatar')) {
        //     $avatar = request()->file('avatar');
        //     $avatar_url = $avatar->storeAs('users', $attributes['username'] . $avatar->getExtension());
        //     $attributes['avatar_url'] = Storage::url($avatar_url);
        // } 

        $user = User::create($attributes);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot create account'
            ]);
        }

        $user->notify(new VerifyEmailNotification($user));

        // event(new UserRegisteredSuccessfully($user));


        return redirect()->route('login')->with('message', 'Your account have been created. Please check your email to verify your accout');
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
