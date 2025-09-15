<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <div style="margin: 5px 0 5px 0;">
        <table cellpadding="0" cellspacing="0"
            style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
            <thead>
                <tr style="background-color: #2f55d4; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;"
                    <th scope="col">
                    <img src="{{ url('images/logo/toman.png') }}" height="24" alt="">
                    Toman
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding:30px; color:#2d3748; font-size:16px; line-height:1.6;">
                        <p>Halo <strong>{{ $user->name ?? 'Pengguna' }}</strong>,</p>
                        <p>Kami menerima permintaan untuk mereset password akun Anda. Klik tombol di bawah ini untuk
                            melanjutkan:</p>
                        <div style="text-align:center; margin:30px 0;">
                            <a href="{{ $url }}"
                                style="background:#2f55d4; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none;">
                                Reset Password
                            </a>
                        </div>
                        <p>Link ini akan kedaluwarsa dalam 60 menit.</p>
                        <p>Jika Anda tidak meminta reset password, abaikan saja email ini.</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding:16px; color:#8492a6; background:#f8f9fc; text-align:center;">
                        © 2025 Toman. All rights reserved.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
