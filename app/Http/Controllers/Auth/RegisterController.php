<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendPinMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/activation-sent';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nomor_telepon' => ['required', 'string', 'unique:users'],
        ]);
    }

    public function daftar(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nomor_telepon' => ['required', 'string', 'unique:users'],
        ]);
        $pin = rand(100000, 999999);
        $activation_token = Str::random(60);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'password' => Hash::make($pin),
            'activation_token' => $activation_token,
            'is_activated' => false,
            'show_password'=> Crypt::encrypt($pin)
        ]);

        Mail::to($user->email)->send(new SendPinMail($user, $pin));

        return redirect('activation-sent');
    }

    protected function create(array $data)
    {
        $pin = rand(100000, 999999);
        $activation_token = Str::random(60);

        $user = User::create([
            'name' => $data['name'],
            'nik' => $data['nik'],
            'email' => $data['email'],
            'nomor_telepon' => $data['nomor_telepon'],
            'password' => Hash::make($pin),
            'activation_token' => $activation_token,
            'is_activated' => false,
        ]);

        Mail::to($user->email)->send(new SendPinMail($user, $pin));

        return $user;
    }

    protected function registered(Request $request, $user)
    {
        return redirect()->route('activation.sent');
    }

    public function activationSent()
    {
        return view('auth.activation_sent');
    }
}
