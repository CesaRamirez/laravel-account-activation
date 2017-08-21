<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\UserRequestedActivationEmail;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ActivationResendController extends Controller
{
    /**
     * Show Form Resend.
     *
     * @return \Illuminate\Http\Response
     */
    public function showResendForm()
    {
        return view('auth.activate.resend');
    }

    /**
     * Resend Activation Email.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'exists:users,email'],
        ], [
            'email.exists' => 'Could not find that account.',
        ]);

        $user = User::where('email', $request->email)->first();

        event(new UserRequestedActivationEmail($user));

        return redirect(route('login'))
                ->withSuccess('Account activation email has been resend.');
    }
}
