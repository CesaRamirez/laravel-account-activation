<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    /**
     * Activate account.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('activation_token', $request->token)
                    ->firstOrFail();

        $user->update([
            'active'           => true,
            'activation_token' => null,
        ]);

        auth()->loginUsingId($user->id);

        return redirect(route('home'))
                    ->with('success', 'Activated!  You\'re now signed in.');
    }
}
