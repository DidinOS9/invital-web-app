<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('id_nama_suami');
            $table->string('nama_ayah_suami');
            $table->string('nama_ibu_suami');
            $table->string('nama_istri');
            $table->string('nama_ayah_istri');
            $table->string('nama_ibu_istri');
            $table->string('hari_akad');
            $table->date('tgl_akad');
            $table->time('jam_mulai_akad');
            $table->time('jam_selesai_akad');
            $table->string('alamat_akad');
            $table->string('hari_resepsi');
            $table->date('tgl_resepsi');
            $table->time('jam_mulai_resepsi');
            $table->time('jam_selesai_resepsi');
            $table->string('alamat_resepsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acara');
    }
};
