<?php

namespace App\Http\Controllers;

use App\Models\Kalibrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KalibrasiController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk melihat data ini.');
        }
        return view('user.permintaan.kalibrasi');
    }

    public function getData()
    {
        /** @var \App\Models\User */
        $user = Auth::user();
        // $loggedInUser = $user->id;
        $userCompany = $user->entity_code;

        if ($user->hasRole([1, 2])) {
            $permintaan = Kalibrasi::with('user.entity')->get();
        } else {
            // filter berdasarkan perusahaan
            $permintaan = Kalibrasi::with('user.entity')
                // ->where('user_id', $loggedInUser)
                ->whereHas('user', function ($query) use ($userCompany) {
                    $query->where('entity_code', $userCompany);
                })
                ->get();
        }

        // hanya ambil field yang dibutuhkan
        $data = $permintaan->map(function ($item, $index) {
            return [
                'id'          => $item->id,
                'no'          => $index + 1,
                'entity_name' => $item->user->entity->entity_name ?? '-',
                'entity_address' => $item->user->entity->entity_address_line_1,
                $item->user->entity->entity_kota ?? '-',
                'npwp'        => $item->npwp,
                'alamat_npwp' => $item->npwp_address,
                'telepon'     => $item->user->entity->entity_phone ?? '-',
                'pic' => $item->user->first_name . ' ' . $item->user->last_name,
                'email'       => $item->user->email,
                'nama_alat'   => $item->tool_name,
                'merk_alat'  => $item->tool_brand,
                'no_seri'     => $item->tool_no,
                'action'      => route('kalibrasi.export_pdf', $item->id),
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }
}
