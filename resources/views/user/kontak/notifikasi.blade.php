@component('mail::message')

<table cellpadding="0" cellspacing="0" style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; width: 100%; border: none; margin 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
<thead>
<tr style="background-color: #2f55d4; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
<th scope="col"><img src="{{ url('images/logo/toman.png') }}" height="24" alt="">Toman</th>
</tr>
</thead>
    
<tbody>
<tr>
<td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">Halo Admin,</td>
</tr>
<tr>
<td style="padding: 15px 24px 15px; color: #8492a6;">Anda telah menerima permintaan baru dari <strong>{{ $contact->name }}</strong> - {{ $contact->company }}.
</tr>

<tr>
<td style="padding: 15px 24px;">
<div style="background-color: #f7f8fa; padding: 20px; border-radius: 8px; border: 1px solid #e0e6ed; margin-top: 10px; margin-bottom: 10px;">
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

</td>
</tr>
    
<tr>
 <td style="padding: 15px 24px 0; color: #8492a6;">Pesan ini dikirim pada <strong>{{ $contact->created_at->format('d F Y, H:i') }} WIB</strong>.</td>
</tr>
    
<tr>
<td style="padding: 15px 24px 15px; color: #8492a6;">Terima Kasih, <br> Toman</td>
</tr>
    
<tr>
<td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">© 2025 Toman. All rights reserved.</td>
</tr>
</tbody>
</table>
</div>
@endcomponent
