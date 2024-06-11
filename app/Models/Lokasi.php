<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = "lokasi";
    protected $fillable = ["nama_kampung", "nama_kecamatan", "slug"];

    public function loker() {
        return $this->hasMany(LowonganPekerjaan::class, "id_lokasi", "id");
    }
}
