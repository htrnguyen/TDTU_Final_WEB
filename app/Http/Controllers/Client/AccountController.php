<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                return view('client.profile', $user);
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
}
