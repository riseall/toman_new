<?php

namespace App\Http\Controllers;

use App\Models\MonDetail;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonitoringController extends Controller
{
    public function pantau()
    {
        /** @var \App\Models\User */
        $user = Auth::user();

        if ($user->hasRole([1, 2])) {
            $dataTransaksi = Monitoring::orderBy('created_at', 'desc')->paginate(5);
        } else {
            $dataTransaksi = Monitoring::where('pp_entity', $user->entity_code)->orderBy('created_at', 'desc')->paginate(5);
        }

        // Mapping tahapan ke 5 step
        $stepMap = [
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 1,
            5 => 2,
            6 => 3,
            7 => 3,
            8 => 4,
            9 => 5,
        ];

        foreach ($dataTransaksi as $transaksi) {
            $rows = MonDetail::where('pp_mstr_id', $transaksi->id)->get();

            $stepData = [];
            foreach ($rows as $row) {
                $step = $stepMap[$row->ppd_sub];
                $stepData[$step][] = $row;
            }

            $stepStatus = [];
            $totalProgress = 0;
            foreach ($stepData as $step => $items) {
                $done = 0;
                $stepProgress = 0;
                foreach ($items as $item) {
                    if ($item->ppd_date) {
                        $done++;
                        $stepProgress += $item->ppd_value / $item->ppd_det_step;
                    }
                }
                if ($done == count($items)) {
                    $stepStatus[$step] = 'completed';
                } elseif ($done > 0) {
                    $stepStatus[$step] = 'active';
                } else {
                    $stepStatus[$step] = '';
                }
                $totalProgress += $stepProgress;
            }
            $totalProgress = round($totalProgress, 2);

            $transaksi->stepStatus = $stepStatus;
            $transaksi->totalProgress = $totalProgress;
        }
        return view('user.permintaan.index', compact('dataTransaksi'));
    }
}
