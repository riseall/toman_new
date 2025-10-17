<?php

namespace App\Services;

use App\Models\MonDetail;
use App\Models\Monitoring;
use Illuminate\Pagination\LengthAwarePaginator;

class MonitoringService
{
    /**
     * Build paginated Monitoring with stepStatus and totalProgress attached.
     *
     * @param  \App\Models\User  $user
     * @param  int  $page
     * @param  int  $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getDataTransaksi($user, int $page = 1, int $perPage = 5): LengthAwarePaginator
    {
        $query = Monitoring::query();

        if ($user->hasRole([1, 2])) {
            $query->whereDate('pp_date', '>=', '2025-01-15');
        } else {
            $query->where('pp_entity', $user->entity_code)
                ->whereDate('pp_date', '>=', '2025-07-01');
        }

        $paginator = $query->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        // step map common
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

        foreach ($paginator as $transaksi) {
            $rows = MonDetail::where('pp_mstr_id', $transaksi->id)->get();

            $stepData = [];
            foreach ($rows as $row) {
                $step = $stepMap[$row->ppd_sub] ?? null;
                if ($step) $stepData[$step][] = $row;
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
                if ($done > 0 && $done == count($items)) {
                    $stepStatus[$step] = 'completed';
                } elseif ($done > 0) {
                    $stepStatus[$step] = 'active';
                } else {
                    $stepStatus[$step] = '';
                }
                $totalProgress += $stepProgress;
            }

            $transaksi->stepStatus = $stepStatus;
            $transaksi->totalProgress = round($totalProgress, 2);
        }

        return $paginator;
    }
}
