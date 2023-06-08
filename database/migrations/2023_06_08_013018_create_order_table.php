<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->foreignUuid('kantor')->references('id')->on('kantor');
            $table->foreignUuid('kendaraan')->references('id')->on('kendaraan');
            $table->foreignUuid('lokasi_tambang')->references('id')->on('lokasi_tambang');
            $table->string('approval');
            $table->integer('amount_approval')->index();
            $table->foreignUuid('driver')->references('id')->on('driver');
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
        Schema::dropIfExists('order');
    }
};
