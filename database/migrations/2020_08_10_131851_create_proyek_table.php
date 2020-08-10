<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_proyek');
            $table->longText('deskripsi_proyek');
            $table->date('tanggal_mulai');
            $table->date('tanggal_deadline');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('id_manager')->nullable();
            $table->foreign('id_manager')->references('id')->on('manager');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
