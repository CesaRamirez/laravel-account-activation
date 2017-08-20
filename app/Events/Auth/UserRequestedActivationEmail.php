<?php

namespace App\Events\Auth;

use App\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRequestedActivationEmail
{
    use Dispatchable, SerializesModels;

    /**
     * User.
     *
     * @var \App\User
     */
    protected $user;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
