<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function verify()
    {
        $token = request()->query('token');

        $tokenRecord = Token::where('token', $token)->first();

        if (!$tokenRecord) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token'
            ]);
        }

        $user = User::find($tokenRecord->user_id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ]);
        }

        // Activate user email and delete token record
        $user->is_active = true;
        $user->save();
        $tokenRecord->delete();

        response()->json([
            'success' => true,
            'message' => 'Verification successfully'
        ]);

        return view('auth.verification-successfully');
    }

    public function resetPassword()
    {
        $token = request()->query('token');
        $username = request()->query('username');

        $tokenRecord = Token::where('token', $token)->first();

        if (!$tokenRecord) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid token'
            ]);
        }

        $user = User::where('username', $username)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ]);
        }

        // Activate user email and delete token record
        $user->is_active = true;
        $user->save();
        $tokenRecord->delete();

        return response()->json([
            'success' => true,
            'message' => 'Reset password successfully'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
