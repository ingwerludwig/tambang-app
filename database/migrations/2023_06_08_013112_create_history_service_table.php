<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_service', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->foreignUuid('id_kendaraan')->references('id')->on('kendaraan');
            $table->string('alamat_service');
            $table->timestamp('tanggal_masuk')->useCurrent();
            $table->timestamp('tanggal_selesai');
            $table->string('deskripsi_keluhan');
            $table->string('diagnosis_kerusakan');
            $table->float('biaya', 8, 2);
            $table->string('status')->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_service');
    }
};
