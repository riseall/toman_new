<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function showReq()
    {
        return view('user.permintaan');
    }

    public function storeReq(Request $request)
    {
        // Logic to store a new permintaan
    }

    public function updateReq(Request $request, $id)
    {
        // Logic to update a specific permintaan
    }

    public function deleteReq($id)
    {
        // Logic to delete a specific permintaan
    }
}
