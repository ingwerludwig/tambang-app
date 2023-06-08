<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExportData
{
    public function query()
    {
        $currentMonth = Carbon::now()->month;

        return DB::table('orders')
            ->whereMonth('created_at', $currentMonth)
            ->get();
    }
}
