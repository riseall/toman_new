<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermintaanMasukNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(
            config('mail.from.address', env('MAIL_FROM_ADDRESS', 'noreply@phapros.co.id')),
            config('mail.from.name', env('MAIL_FROM_NAME', 'Toman - Toll Manufacturing Pt. Phapros.tbk'))
        )
            ->subject('Toman - Pesan Baru')
            ->markdown('user.kontak.notifikasi')
            ->replyTo($this->contact->email, $this->contact->name);
    }
}
