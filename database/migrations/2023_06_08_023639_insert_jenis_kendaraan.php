<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'id' => Str::uuid(),
                'jenis' => 'ANGKUTAN ORANG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => Str::uuid(),
                'jenis' => 'ANGKUTAN_BARANG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ];
        DB::table('jenis_kendaraan')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("jenis_kendaraan")->delete();
    }
};
