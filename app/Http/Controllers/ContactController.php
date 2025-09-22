<?php

namespace App\Http\Controllers;

use App\Mail\PermintaanMasukNotification;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.kontak.kontak');
    }

    // app/Http/Controllers/KontakController.php (atau nama controller Anda)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'address' => 'required|string',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        try {
            $kontakBaru = Contact::create($validatedData);

            // Kirim notifikasi email
            $adminEmails = config('notification.admin_emails');
            if (!empty($adminEmails)) {
                Mail::to($adminEmails)->queue(new PermintaanMasukNotification($kontakBaru));
            }

            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim!');
        } catch (\Exception $e) {
            Log::error('Gagal saat proses store kontak: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan pada server, silakan coba lagi.'); // Gunakan key 'error' untuk notif gagal
        }
    }

    public function indexPesan()
    {
        $pesan = Contact::all()->sortByDesc('created_at');
        return view('admin.pesan.index', compact('pesan'));
    }
}
