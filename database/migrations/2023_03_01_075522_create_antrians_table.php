<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('kode_poli');
            $table->integer('no_antrian');
            $table->unsignedBigInteger('pasien_id');
            $table->enum('status', array('DIPROSES', 'TIDAK_DILAYANI', 'SELESAI_DILAYANI'))->default('DIPROSES');
            $table->timestamps();

            $table->foreign('kode_poli')->references('kode_poli')->on('polis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pasien_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
