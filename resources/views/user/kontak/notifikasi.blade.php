@component('mail::message')
# Permintaan Kontak Baru

Halo Admin,
Anda telah menerima permintaan baru dari **{{ $contact->name }}** ({{ $contact->company }}).

<div style="background-color: #f7f8fa; padding: 20px; border-radius: 8px; border: 1px solid #e0e6ed; margin-top: 20px; margin-bottom: 20px;">
<div style="margin-bottom: 15px;">
<p style="margin: 0; font-size: 12px; color: #718096; text-transform: uppercase; font-weight: bold;">Contact Person</p>
<p style="margin: 2px 0 0 0; font-size: 16px; color: #2d3748;">{{ $contact->name }}</p>
</div>

<div style="margin-bottom: 15px;">
<p style="margin: 0; font-size: 12px; color: #718096; text-transform: uppercase; font-weight: bold;">Email & Telepon</p>
<p style="margin: 2px 0 0 0; font-size: 16px; color: #2d3748;">{{ $contact->email }} | {{ $contact->phone }}</p>
</div>

<div style="margin-bottom: 15px;">
<p style="margin: 0; font-size: 12px; color: #718096; text-transform: uppercase; font-weight: bold;">Alamat</p>
<p style="margin: 2px 0 0 0; font-size: 16px; color: #2d3748;">{{ $contact->address }}</p>
</div>

<hr style="border: none; border-top: 1px solid #e0e6ed; margin: 20px 0;">

<div>
<p style="margin: 0; font-size: 12px; color: #718096; text-transform: uppercase; font-weight: bold;">Pesan</p>
<p style="margin: 5px 0 0 0; font-size: 16px; color: #2d3748; line-height: 1.5;">{!! nl2br(e($contact->message)) !!}</p>
</div>
</div>

Pesan ini dikirim pada **{{ $contact->created_at->format('d F Y, H:i') }} WIB**.

Terima kasih,<br>
Sistem Website {{ config('app.name') }}
@endcomponent