<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LowonganPekerjaan extends Model
{
    use HasFactory;

    protected $table= "lowongan_pekerjaan";
    protected $fillable = ["nama", "batas_lamaran", "syarat", "catatan", "deskripsi", "gambar", "id_pemberi_kerja", "id_lokasi", "id_tipe_pekerjaan", "besaran_gaji"];

    public function pk() {
        return $this->belongsTo(PemberiKerja::class);
    }

    public function lokasi() {
        return $this->belongsTo(Lokasi::class);
    }

    public function tp() {
        return $this->belongsTo(TipePekerjaan::class);
    }
}
