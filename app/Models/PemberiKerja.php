<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PemberiKerja extends Model
{
    use HasFactory;
    protected $table= "pemberi_kerja";
    protected $fillable = ["nama", "no_hp", "link", "deskripsi", "email", "gambar", "slug"];

    public function loker() {
        return $this->hasMany(LowonganPekerjaan::class, 'id_pemberi_kerja');
    }
}
