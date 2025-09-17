<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        return view('admin.company.index');
    }

    public function getCompany()
    {
        $company = Company::all();

        $data = $company->map(function ($item, $index) {
            return [
                'entity_code' => $item->entity_code,
                'no' => $index + 1,
                'name' => $item->entity_name,
                'email' => $item->entity_email,
                'phone' => $item->entity_phone,
                'address' => $item->entity_address_line_1,
                'city' => $item->entity_kota,
            ];
        });

        return response()->json([
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'entity_name' => 'required|string|max:255',
            'entity_email' => 'required|string|email|max:255',
            'entity_phone' => 'required|string|max:255',
            'entity_address_line_1' => 'required|string|max:255',
            'entity_kota' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $company = Company::create([
                'entity_name' => $request->entity_name,
                'entity_email' => $request->entity_email,
                'entity_phone' => $request->entity_phone,
                'entity_address_line_1' => $request->entity_address_line_1,
                'entity_kota' => $request->entity_kota,
            ]);

            $company->entity_code = $company->id;
            $company->save();

            return response()->json([
                'success' => 'Perusahaan berhasil ditambahkan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function edit($entity_code)
    {
        $company = Company::where('entity_code', $entity_code)->firstOrFail();
        return view('admin.company.update', compact('company'));
    }

    public function update(Request $request, $entity_code)
    {
        $validator = Validator::make($request->all(), [
            'entity_name' => 'required|string|max:255',
            'entity_email' => 'required|string|email|max:255',
            'entity_phone' => 'required|string|max:255',
            'entity_address_line_1' => 'required|string|max:255',
            'entity_kota' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $company = Company::where('entity_code', $entity_code)->firstOrFail();
            $company->entity_name = $request->entity_name;
            $company->entity_email = $request->entity_email;
            $company->entity_phone = $request->entity_phone;
            $company->entity_address_line_1 = $request->entity_address_line_1;
            $company->entity_kota = $request->entity_kota;
            $company->save();

            return response()->json([
                'success' => 'Perusahaan berhasil diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
