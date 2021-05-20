<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
        return view('auth.pwreset');
    }

    public function password(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if ($user == null) {
            return redirect()->back()->with(['error' => 'Email does not exists']);
        }

        $user = Sentinel::findById($user->id);

        $reminder = Reminder::exists($user) ?: Reminder::create($user);

        if ($reminder == true) {
            $reminder_userid = Reminder::where('user_id', '=', $user->id)->first();
            $this->sendEmail($user, $reminder_userid->code);
        }
        return redirect()->back()->with(['success' => 'Reset code sent to your email']);
    }

    public function sendEmail($user, $code)
    {
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function ($message) use ($user) {
                $message->to($user->email);
                $message->subject("$user->username reset your password");
                $message->from("laravelproject2@gmail.com");
            }
        );
    }
}
