<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasProduksi extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_produksi';

    protected $guarded = ['id'];

    function permintaan()
    {
        return $this->hasMany(Permintaan::class, 'dossage_id', 'id');
    }
}
