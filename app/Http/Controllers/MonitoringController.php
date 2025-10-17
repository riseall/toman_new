<?php

namespace App\Http\Controllers;

use App\Services\MonitoringService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonitoringController extends Controller
{
    protected $monitoringService;

    public function __construct(MonitoringService $monitoringService)
    {
        $this->monitoringService = $monitoringService;
    }

    // AJAX endpoint yang hanya render list + pagination
    public function data(Request $request)
    {
        /** @var \App\Models\User */
        $user = Auth::user();
        $page = $request->get('page', 1);

        $dataTransaksi = $this->monitoringService->getDataTransaksi($user, $page);

        // agar pagination links di partial mengarah ke /permintaan sebagai fallback
        $dataTransaksi->withPath(route('permintaan.index'));

        // return partial (HTML) untuk AJAX
        return view('user.monitoring._list', compact('dataTransaksi'));
    }
}
