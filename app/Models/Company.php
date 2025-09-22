<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'entities';
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class, 'entity_code', 'entity_code');
    }

    public function permintaans()
    {
        return $this->hasManyThrough(
            Permintaan::class, // model tujuan
            User::class,       // model perantara
            'entity_code',     // FK di tabel users
            'user_id',         // FK di tabel permintaan
            'entity_code',     // PK di tabel companies
            'id'               // PK di tabel users
        );
    }

    public function kalibrasis()
    {
        return $this->hasManyThrough(
            Kalibrasi::class, // model tujuan
            User::class,       // model perantara
            'entity_code',     // FK di tabel users
            'user_id',         // FK di tabel kalibrasi
            'entity_code',     // PK di tabel companies
            'id'               // PK di tabel users
        );
    }
}
