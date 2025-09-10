<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonDetail extends Model
{
    use HasFactory;

    protected $table = 'ppd_dets';

    protected $guarded = ['id'];
}
