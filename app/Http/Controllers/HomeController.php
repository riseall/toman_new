<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entities = Company::all();
        return view('welcome', compact('entities'));
    }

    public function saveIdentity(Request $request)
    {
        $normalizeFields = [
            'phone',
            'entity_code',
            'entity_name',
            'entity_email',
            'entity_phone',
            'entity_address_line_1',
            'entity_kota'
        ];

        foreach ($normalizeFields as $field) {
            if ($request->has($field)) {
                $val = $request->input($field);
                if (is_array($val)) {
                    $val = reset($val);
                }

                // pastikan string atau null
                $val = $val !== null ? (string) $val : null;

                // --- tambahkan sanitasi untuk mencegah XSS ---
                if ($val !== null) {
                    // hilangkan tag HTML dan encode karakter berbahaya
                    $val = strip_tags($val);
                    $val = htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
                }

                $request->merge([$field => $val]);
            }
        }

        $request->validate([
            'phone' => 'required|string|max:20',
            'entity_name' => 'required_if:entity_code,new|string|max:255',
            'entity_email' => 'required_if:entity_code,new|email|max:255',
            'entity_phone' => 'required_if:entity_code,new|string|max:20',
            'entity_address_line_1' => 'required_if:entity_code,new|string|max:255',
            'entity_kota' => 'required_if:entity_code,new|string|max:100',
            'entity_code' => 'nullable|string',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        if ($request->filled('entity_code') && $request->entity_code !== 'new') {
            $company = Company::where('entity_code', $request->entity_code)->first();

            if (! $company) {
                return response()->json([
                    'message' => 'Perusahaan tidak ditemukan.'
                ], 422);
            }

            $user->update([
                'phone' => $request->phone,
                'entity_code' => $company->entity_code,
            ]);
        } else {
            $entity = Company::create([
                'entity_name' => $request->entity_name,
                'entity_email' => $request->entity_email ?? $user->email,
                'entity_phone' => $request->entity_phone ?? $request->phone,
                'entity_address_line_1' => $request->entity_address_line_1,
                'entity_kota' => $request->entity_kota,
            ]);

            $entity->entity_code = $entity->id;
            $entity->save();

            $user->update([
                'phone' => $request->phone,
                'entity_code' => $entity->id,
            ]);
        }

        session()->forget('show_identity_modal');

        return response()->json(['success' => 'Identitas berhasil disimpan.']);
    }
}
