<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'prod_name',
        'prod_bets_size',
        'prod_exp_yr',
        'prod_package',
        'prod_is_active',
    ];
    
    protected $casts = [
        'prod_is_active' => 'boolean',
    ];
}
