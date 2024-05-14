<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\UnauthorizedException;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $username)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->username === $username) {
            return view('client.profile')->with('user', $user);
        }

        throw new UnauthorizedException('Unauthorized');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    public function updateAvatar()
    {
        $user = User::find(Auth::user()->id);

        // Validate the incoming request
        $avatar = request()->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:20000',
        ]);

        if (!$avatar) {
            return back()->with('message', 'Fail to change avatar');
        }
        
        // Save user avatar
        if (request()->hasFile('avatar')) {
            $avatar = request()->file('avatar');
            $avatar_url = $avatar->storeAs('images/users', $user->username . '.' . $avatar->getClientOriginalExtension(), 'root_public');
            // $user->avatar_url = $a = Storage::url($avatar_saved);
            $user->avatar_url = $avatar_url;
            $user->save();
            // dd($a);
        }

        return redirect()->back()->with('success', 'Your avatar has been updated successfully');
    }


    public function destroy()
    {
        $userId = Auth::user()->id;

        $isDestroyed = User::destroy($userId);

        if (!$isDestroyed) {
            throw new ModelNotFoundException();
        }

        Auth::logout();

        return redirect()->route('home');
    }

    public function showProfile($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('client.profile', ['user' => $user]);
    }
}
