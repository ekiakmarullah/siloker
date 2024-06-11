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
        Schema::create('lowongan_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemberi_kerja');
            $table->unsignedBigInteger('id_lokasi');
            $table->unsignedBigInteger('id_tipe_pekerjaan');
            $table->foreign('id_pemberi_kerja')->references('id')->on('pemberi_kerja')->onDelete('cascade');
            $table->foreign('id_lokasi')->references('id')->on('lokasi')->onDelete('cascade');
            $table->foreign('id_tipe_pekerjaan')->references('id')->on('tipe_pekerjaan')->onDelete('cascade');
            $table->string('nama', 150);
            $table->string('slug');
            $table->string('batas_lamaran', 20);
            $table->text('deskripsi');
            $table->string('gambar');
            $table->string('besaran_gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan_pekerjaan');
    }
};
