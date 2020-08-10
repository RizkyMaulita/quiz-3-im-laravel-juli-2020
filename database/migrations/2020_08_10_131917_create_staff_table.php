<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_karyawan')->nullable();
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
            $table->unsignedBigInteger('id_manager')->nullable();
            $table->foreign('id_manager')->references('id')->on('manager');
            $table->unsignedBigInteger('id_proyek')->nullable();
            $table->foreign('id_proyek')->references('id')->on('proyek');
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
        Schema::dropIfExists('staff');
    }
}
