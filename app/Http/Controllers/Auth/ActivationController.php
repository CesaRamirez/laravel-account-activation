<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate(Request $request)
    {
        $user = User::where('email', $request->email)
                    ->where('activation_token', $request->token)->firstOrFail();

        $user->update([
            'active'           => true,
            'activation_token' => null,
        ]);

        auth()->loginUsingId($user->id);

        return redirect(route('home'))->withSuccess('Activated!  You\'re now signed in.');
    }
}
