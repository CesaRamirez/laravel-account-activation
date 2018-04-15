<?php

namespace App\Http\Controllers\Auth;

use App\Events\Auth\UserRequestedActivationEmail;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivationRequest;
use App\User;

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
    public function resend(ActivationRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        event(new UserRequestedActivationEmail($user));

        return redirect(route('login'))
                    ->with('success', 'Account activation email has been resend.');
    }
}
