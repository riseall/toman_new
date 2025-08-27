<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $guarded = ['id'];

    protected $dates = ['req_date'];

    protected $casts = [
        'req_date' => 'date',
        'is_formulation' => 'boolean',
        'is_weighing' => 'boolean',
        'is_procces' => 'boolean',
        'is_package' => 'boolean',
        'is_formula_dev' => 'boolean',
        'is_process_val' => 'boolean',
        'is_clean_val' => 'boolean',
        'is_analyst_val' => 'boolean',
        'is_stabil_test' => 'boolean',
        'is_limbah_handling' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
