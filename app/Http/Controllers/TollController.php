<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index()
    {
        $company = Company::with(['permintaans.user'])
            ->withCount('permintaans')
            ->having('permintaans_count', '>', 0)
            ->get();
        // dd($company);
        return view('admin.permintaan.toll_in', compact('company'));
    }

    public function show($entity_code)
    {
        $docTitles = [
            'doc_cpob'     => 'Dokumen CPOB',
            'doc_permiss'  => 'Dokumen Izin',
            'doc_siup'     => 'Dokumen SIUP',
            'doc_tdp'      => 'Dokumen TDP',
            'doc_npwp'     => 'Dokumen NPWP',
            'doc_pkp'      => 'Dokumen PKP',
            'doc_prmy_draw' => 'Dokumen Primary Drawing',
            'doc_coa'      => 'Dokumen COA',
            'doc_msds'     => 'Dokumen MSDS',
            'doc_protap'   => 'Dokumen Protap',
            'doc_process'  => 'Dokumen Process',
            'any_doc'      => 'Dokumen Lainnya',
        ];

        $company = Company::with(['permintaans.user'])
            ->where('entity_code', $entity_code)
            ->firstOrFail();
        return view('admin.permintaan.show_toll', compact('company', 'docTitles'));
    }

    public function getPermintaans($entity_code)
    {
        $company = Company::with(['permintaans.user', 'permintaans.fasilitasProduksi'])
            ->where('entity_code', $entity_code)
            ->firstOrFail();

        $data = $company->permintaans->map(function ($p, $i) {
            return [
                'id'         => $p->id,
                'no'         => $i + 1,
                'req_name'   => $p->fasilitasProduksi->dosage_form,
                'req_date'   => $p->req_date,
                'prod_name'  => $p->prod_name,
                'work_scope' => $p->work_scope,
                'user'       => $p->user->first_name,
                'doc_cpob'   => $p->doc_cpob ? url('/storage/' . $p->doc_cpob) : null,
                'doc_permiss' => $p->doc_permiss ? url('/storage/' . $p->doc_permiss) : null,
                'doc_siup'   => $p->doc_siup ? url('/storage/' . $p->doc_siup) : null,
                'doc_tdp'    => $p->doc_tdp ? url('/storage/' . $p->doc_tdp) : null,
                'doc_npwp'   => $p->doc_npwp ? url('/storage/' . $p->doc_npwp) : null,
                'doc_pkp'    => $p->doc_pkp ? url('/storage/' . $p->doc_pkp) : null,
                'doc_prmy_draw' => $p->doc_prmy_draw ? url('/storage/' . $p->doc_prmy_draw) : null,
                'doc_coa' => $p->doc_coa ? url('/storage/' . $p->doc_coa) : null,
                'doc_msds' => $p->doc_msds ? url('/storage/' . $p->doc_msds) : null,
                'doc_protap' => $p->doc_protap ? url('/storage/' . $p->doc_protap) : null,
                'doc_process' => $p->doc_process ? url('/storage/' . $p->doc_process) : null,
                'any_doc' => $p->any_doc ? url('/storage/' . $p->any_doc) : null
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }
}
