<?php

namespace App\Mail;

use App\EmailConfirmationToken;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $confirmationUrl;

    /**
     * Create a new message instance.
     *
     * @internal param User $user
     * @param User $user
     */
    public function __construct(User $user, EmailConfirmationToken $emailConfirmationToken)
    {
        $this->user = $user;
        $this->confirmationUrl = $this->generateUrl($user, $emailConfirmationToken);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@money.com')
            ->view('mails.user_registered');
    }

    private function generateUrl(User $user, EmailConfirmationToken $emailConfirmationToken)
    {
        $userEmail = $user->email;
        $token = $emailConfirmationToken->token;
        return route('email_token_validation') . "?" . http_build_query(['email'    =>  $userEmail, 'token' =>  $token]);
    }
}
