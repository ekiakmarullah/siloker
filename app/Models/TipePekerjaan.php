<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePekerjaan extends Model
{
    use HasFactory;
    protected $table = "tipe_pekerjaan";
    protected $fillable = ["nama_tipe_pekerjaan", "slug"];

    public function loker() {
        return $this->hasMany(LowonganPekerjaan::class, "id_tipe_pekerjaan", "id");
    }
}
