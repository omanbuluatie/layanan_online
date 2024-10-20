<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPinMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $pin;

    public function __construct(User $user, $pin)
    {
        $this->user = $user;
        $this->pin = $pin;
    }

    public function build()
    {
        return $this->view('emails.send_pin')
            ->with([
                'name' => $this->user->name,
                'pin' => $this->pin,
            ])
            ->subject('PIN Pendaftaran Anda');
    }
}
