<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationEmail;
use Illuminate\Support\Str;

class ActivationController extends Controller
{
    // public function showResendForm()
    // {
    //     return view('auth.resend-activation');
    // }
    public function showResendForm(Request $request)
    {
        $email = $request->query('email');
        return view('auth.resend-activation', compact('email'));
    }

    public function resend(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'We can\'t find a user with that email address.']);
        }

        if ($user->is_activated) {
            return back()->with('status', 'This account is already activated. You can log in.');
        }

        // Generate new activation token
        $user->activation_token = Str::random(60);
        $user->save();

        // Send activation email
        Mail::to($user->email)->send(new ActivationEmail($user));

        return back()->with('status', 'We have sent you an activation link. Please check your email.');
    }

    public function activate($token)
    {
        $user = User::where('activation_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid activation token.');
        }

        $user->is_activated = true;
        $user->activation_token = null;
        $user->save();

        return redirect()->route('login')->with('status', 'Your account has been activated. You can now log in.');
    }
}