<?php

namespace App\Mail;

use App\Models\PendaftaranLayanan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PendaftaranLayananMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pendaftaran;

    public function __construct(PendaftaranLayanan $pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }

    public function build()
    {
        return $this->view('emails.pendaftaran_layanan')
            ->subject('Konfirmasi Pendaftaran Layanan')
            ->with([
                'pendaftaran' => $this->pendaftaran,
            ]);
    }
}
