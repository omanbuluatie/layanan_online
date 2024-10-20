<?php

namespace App\Mail;

use App\Models\PendaftaranLayanan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PendaftaranProsesMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pendaftaran;

    public function __construct(PendaftaranLayanan $pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }

    public function build()
    {
        return $this->view('emails.pendaftaran_proses')
                    ->with([
                        'pendaftaranId' => $this->pendaftaran->id,
                        'status' => $this->pendaftaran->status_pendaftaran,
                    ])
                    ->subject('Status Pendaftaran Anda Dalam Proses');
    }
}
