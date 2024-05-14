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

        if ($user->username === $username) {
            return view('client.profile')->with('user', $user);
        }

        throw new UnauthorizedException('Unauthorized');
    }

    public function store(Request $request)
    {
        //
    }

    /**     
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function updateAvatar(Request $request)
    {
        // Validate the incoming request
        $avatar = request()->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:20000',
        ]);

        dd('heheh');

        // if (!$avatar) {
        //     return back()->with('message', 'Fail to change avatar');
        // }

        $user = Auth::user();

        // Save user avatar
        if (request()->hasFile('avatar')) {
            $avatar = request()->file('avatar');
            $avatar_url = $avatar->storeAs('users', $avatar['username'] . $avatar->getExtension());
            $avatar['avatar_url'] = Storage::url($avatar_url);
        }

        dd($avatar_url);

        return response()->json(['error' => 'File upload failed.'], 500);
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
