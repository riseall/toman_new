<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PermintaanController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk melihat data ini.');
        }

        $user = Auth::user();
        $loggedInUsername = $user->username;
        $userCompanyName = $user->entity_name;

        $permintaan = Permintaan::where('username', $loggedInUsername)
            ->whereHas('user', function ($query) use ($userCompanyName) {
                $query->where('entity_name', $userCompanyName);
            })
            ->latest()
            ->paginate(10);
        return view('user.permintaan.index', compact('permintaan'));
    }
    public function create()
    {
        return view('user.permintaan.create');
    }

    public function store(Request $request)
    {
        // 1. Define base validation rules common to all req_name types
        //    Semua kolom yang mungkin ada di tabel Permintaan harus ada di sini,
        //    dengan status 'nullable' jika tidak selalu required.
        $rules = [
            'req_name' => 'required|in:Tablet,Kapsul,Parental,Cairan,Powder,Semisolid',
            'req_date' => 'required|date',
            'prod_name' => 'required|string|max:100',
            'act_ingredient' => 'required|string|max:100',
            'act_ingredient_group' => 'nullable|string|max:50',
            'prod_category' => 'nullable|string|max:50',
            'work_scope' => 'nullable|string|max:50',

            'pmry_pkg_type' => 'nullable|string|max:50',
            'pmry_pkg_material' => 'nullable|string|max:50',
            'pmry_pkg_width' => 'nullable|string|max:50',
            'pmry_pkg_spec' => 'nullable|string|max:50',

            'scnd_etiket' => 'nullable|string|max:50',
            'scnd_dus' => 'nullable|string|max:50',
            'scnd_dus_col' => 'nullable|string|max:50',

            'trsr_box_mstr' => 'nullable|string|max:50',
            'trsr_etiket' => 'nullable|string|max:50',

            'penyedia_rm_pm' => 'nullable|string|max:20',
            'flowchart_process' => 'nullable|string|max:20',

            'is_formulation' => 'nullable|boolean',
            'is_weighing' => 'nullable|boolean',
            'is_procces' => 'nullable|boolean',
            'is_package' => 'nullable|boolean',
            'qc_inspect' => 'nullable|string|max:100',
            'is_formula_dev' => 'nullable|boolean',
            'is_process_val' => 'nullable|boolean',
            'is_clean_val' => 'nullable|boolean',
            'is_analyst_val' => 'nullable|boolean',
            'is_stabil_test' => 'nullable|boolean',
            'any_test' => 'nullable|string|max:100',
            'is_limbah_handling' => 'nullable|boolean',
            'hjp_estimated' => 'nullable|string|max:50',
            'hna_estimated' => 'nullable|string|max:50',
            'fc_1' => 'nullable|string|max:50',
            'fc_2' => 'nullable|string|max:50',
            'fc_3' => 'nullable|string|max:50',
            'fc_4' => 'nullable|string|max:50',
            'fc_5' => 'nullable|string|max:50',
            'any_note' => 'nullable|string',

            'doc_cpob' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_permiss' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_siup' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_tdp' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_npwp' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_pkp' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_prmy_draw' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_coa' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_msds' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_protap' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'doc_process' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',
            'any_doc' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png|max:2048',

            'max_temp' => 'nullable|string|max:50',
            'max_humidity' => 'nullable|string|max:50',
            'light_sensitivity' => 'nullable|string|max:50',
            'oxidation_sensitivity' => 'nullable|string|max:50',
        ];

        $reqName = $request->input('req_name');

        // 2. Add conditional validation rules based on 'req_name'
        //    Di sini, kita hanya akan menimpa 'nullable' menjadi 'required' jika diperlukan.
        switch ($reqName) {
            case 'Tablet':
                $rules = array_merge($rules, [
                    'bentuk' => 'nullable|string|max:50',
                    'color' => 'nullable|string|max:50',
                    'bobot_range_bobot' => 'nullable|string|max:50',
                    'diameter' => 'nullable|string|max:50',
                    'tebal' => 'nullable|string|max:50',
                    'tablet_type' => 'nullable|string|max:50',
                    'kadar_air' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                    'dissolusi' => 'nullable|string|max:50',
                ]);
                break;
            case 'Kapsul':
                $rules = array_merge($rules, [
                    'capsule_size' => 'nullable|string|max:50',
                    'bobot_range_bobot' => 'nullable|string|max:50',
                    'kadar_air' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                    'dissolusi' => 'nullable|string|max:50',
                ]);
                break;
            case 'Parental':
                $rules = array_merge($rules, [
                    'type' => 'nullable|string|max:50',
                    'package' => 'nullable|string|max:50',
                    'bobot_range_bobot' => 'nullable|string|max:50',
                    'volume_range_volume' => 'nullable|string|max:50',
                    'ph' => 'nullable|string|max:50',
                    'osmolaritas' => 'nullable|string|max:50',
                    'weight_type' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                    'mikroba_endotoksin' => 'nullable|string|max:50',
                    'partikel_asing' => 'nullable|string|max:50',
                    'oxidation_sensitivity' => 'nullable|string|max:50',
                ]);
                break;
            case 'Cairan':
                $rules = array_merge($rules, [
                    'type' => 'nullable|string|max:50',
                    'package' => 'nullable|string|max:50',
                    'volume' => 'nullable|string|max:50',
                    'ph' => 'nullable|string|max:50',
                    'viskositas' => 'nullable|string|max:50',
                    'weight_type' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                ]);
                break;
            case 'Powder':
                $rules = array_merge($rules, [
                    'package' => 'nullable|string|max:50',
                    'bobot_range_bobot' => 'nullable|string|max:50',
                    'pemerian_fisik' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                ]);
                break;
            case 'Semisolid':
                $rules = array_merge($rules, [
                    'type' => 'nullable|string|max:50',
                    'package' => 'nullable|string|max:50',
                    'pemerian_fisik' => 'nullable|string|max:50',
                    'viskositas' => 'nullable|string|max:50',
                    'kadar_zat_aktif' => 'nullable|string|max:50',
                ]);
                break;
        }

        // --- DEBUGGING: Uncomment baris di bawah ini untuk melihat data yang diterima dari form
        // dd($request->all());

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get validated data
        $validatedData = $validator->validated();

        $reqName = $request->input('req_name');
        $fileFields = [
            'doc_cpob',
            'doc_permiss',
            'doc_siup',
            'doc_tdp',
            'doc_npwp',
            'doc_pkp',
            'doc_prmy_draw',
            'doc_coa',
            'doc_msds',
            'doc_protap',
            'doc_process',
            'any_doc'
        ];
        $uploadDate = Carbon::now()->toDateString();

        foreach ($fileFields as $field) {
            // Periksa apakah ada file yang diupload untuk field ini
            if ($request->hasFile($field)) {

                $folderPath = $reqName . '/' . $field;
                $filePath = $request->file($field);
                $fileName = $uploadDate . '_' . $filePath->getClientOriginalName();
                $filePath = $filePath->storeAs($folderPath, $fileName, 'public');
                // Simpan path file ke $validatedData untuk disimpan ke database
                $validatedData[$field] = $filePath;
            } else {
                // Jika tidak ada file diupload atau validasi mengosongkan nilai (misal karena error file),
                // pastikan field ini null di $validatedData
                $validatedData[$field] = null;
            }
        }

        // Add the authenticated user's username
        if (Auth::check()) {
            $validatedData['username'] = Auth::user()->username;
        } else {
            return redirect()->route('login')->with('error', 'Anda harus masuk untuk mengajukan permintaan.');
        }

        // Handle boolean fields - ensure they are explicitly 0 or 1
        $booleanFields = [
            'is_formulation',
            'is_weighing',
            'is_procces',
            'is_package',
            'is_formula_dev',
            'is_process_val',
            'is_clean_val',
            'is_analyst_val',
            'is_stabil_test',
            'is_limbah_handling'
        ];

        foreach ($booleanFields as $field) {
            $validatedData[$field] = $request->has($field) ? 1 : 0;
        }

        DB::beginTransaction();

        try {
            Permintaan::create($validatedData);

            DB::commit();

            return redirect()->route('permintaan.index')->with('success', 'Permintaan Toll berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error creating Permintaan: ' . $e->getMessage(), ['exception' => $e, 'validated_data' => $validatedData]);
            return redirect()->back()->with('error', 'Gagal menambahkan Permintaan Toll. Silakan coba lagi. Pesan Error: ' . $e->getMessage())->withInput();
        }
    }

    // public function deleteReq($id)
    // {
    //     $tollRequest->delete();
    //     return redirect()->route('toll_requests.index')->with('success', 'Permintaan Toll berhasil dihapus!');
    // }
}
