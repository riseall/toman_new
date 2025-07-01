<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'address_line_1',
        'address_line_2',
        'negara',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'postal_code',
        'about',
        'gender',
        'photo',
        'image',
        'is_admin',
        'entity_code',
        'entity_id',
        'entity_name',
        'is_toller',
        'is_maklooner',
        'user_last_logon',
        'user__char_01',
        'user__int_01',
        'user__decimal_01',
        'user__date_01',
        'is_active',
        'is_accept',
        'is_agree',
        'is_agree_01',
        'is_agree_02',
        'is_agree_03',
        'is_member',
        'is_suspended',
        'is_confirmed',
        'is_verified',
        'is_logged_in',
        'is_logged_out',
        'login_time',
        'logout_time',
        'accepted',
        'rejected',
        'remembered',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'user_last_logon' => 'datetime',
        'user__date_01' => 'datetime',
        'login_time' => 'datetime',
        'logout_time' => 'datetime',
        'is_admin' => 'boolean',
        'is_toller' => 'boolean',
        'is_maklooner' => 'boolean',
        'is_active' => 'boolean',
        'is_accept' => 'boolean',
        'is_agree' => 'boolean',
        'is_agree_01' => 'boolean',
        'is_agree_02' => 'boolean',
        'is_agree_03' => 'boolean',
        'is_member' => 'boolean',
        'is_suspended' => 'boolean',
        'is_confirmed' => 'boolean',
        'is_verified' => 'boolean',
        'is_logged_in' => 'boolean',
        'is_logged_out' => 'boolean',
        'accepted' => 'boolean',
        'rejected' => 'boolean',
        'remembered' => 'boolean',
    ];
}
