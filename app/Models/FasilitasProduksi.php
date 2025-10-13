<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasProduksi extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_produksi';

    protected $guarded = ['id'];

    public const PRODUCT_TYPES = [
        'Tablet Betalactam',
        'Tablet Non Betalactam',
        'Serbuk Penicilin',
        'Serbuk Injeksi Non Betalactam',
        'Serbuk Injeksi Betalactam',
        'Salep Non Betalactam',
        'Capsule',
        'Bottle',
    ];

    function permintaan()
    {
        return $this->hasMany(Permintaan::class, 'dossage_id', 'id');
    }
}
