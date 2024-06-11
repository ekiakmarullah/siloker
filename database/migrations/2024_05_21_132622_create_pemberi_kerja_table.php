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
        Schema::create('pemberi_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('slug');
            $table->string('no_hp', 20)->nullable();
            $table->string('link')->nullable();
            $table->text('deskripsi');
            $table->string('email')->nullable();
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemberi_kerja');
    }
};
