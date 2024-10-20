<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    public function activate($token)
    {
        $user = User::where('activation_token', $token)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Token aktivasi tidak valid.');
        }

        // Aktifkan user dan login otomatis
        $user->is_activated = true;
        $user->activation_token = null;
        $user->save();

        // Login otomatis setelah aktivasi
        Auth::login($user);

        return redirect('/select-service')->with('success', 'Akun Anda telah diaktivasi!');
    }
    public function showResendForm(Request $request)
    {
        $email = $request->query('email');
        return view('auth.resend-activation', compact('email'));
    }
}
