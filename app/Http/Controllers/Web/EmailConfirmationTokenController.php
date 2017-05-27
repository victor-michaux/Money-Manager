<?php

namespace App\Http\Controllers\Web;

use App\EmailConfirmationToken;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class EmailConfirmationTokenController extends Controller
{
    public function check(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $token = EmailConfirmationToken::where('token', '=', $request->token)->first();

        if(!is_null($user) && !is_null($token)) {
            if($user->id === $token->user->id)
            {
                $token->delete();
                return response()->redirectToRoute('dashboard')->with('notification', "You're account has now been activated, enjoy manage your money !");
            }
        }
        return response()->redirectTo('/');
    }
}
