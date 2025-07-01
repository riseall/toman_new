<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'rizalnug2@gmail.com'],
            [
                'id' => 46,
                'username' => 'rizal_nugroho',
                'first_name' => 'rizal',
                'last_name' => 'nugroho',
                'email' => 'rizalnug2@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$A4.IHeRB9DYiqUlN89ufRuPsDig0PATmGbGFgebdsRDp9tE906K8O',
                'phone' => '082243573182',
                'address_line_1' => null,
                'address_line_2' => null,
                'negara' => null,
                'provinsi' => null,
                'kota' => null,
                'kecamatan' => null,
                'kelurahan' => null,
                'rt' => null,
                'rw' => null,
                'postal_code' => null,
                'about' => null,
                'gender' => 'l',
                'photo' => null,
                'image' => null,
                'is_admin' => 0,
                // 'role_id' => null,
                // 'role' => null,
                'entity_code' => '001',
                'entity_id' => '0',
                'entity_name' => null,
                'is_toller' => 0,
                'is_maklooner' => 0,
                'user_last_logon' => null,
                'user__char_01' => null,
                'user__int_01' => null,
                'user__decimal_01' => null,
                'user__date_01' => null,
                'remember_token' => null,
                'created_at' => '2025-06-24 08:27:41',
                'updated_at' => '2025-06-24 08:27:41',
                'is_active' => 1,
                'is_accept' => 0,
                'is_agree' => 0,
                'is_agree_01' => 0,
                'is_agree_02' => 0,
                'is_agree_03' => 0,
                'is_member' => 0,
                'is_suspended' => 0,
                'is_confirmed' => 0,
                'is_verified' => 0,
                'is_logged_in' => 0,
                'is_logged_out' => 0,
                'login_time' => null,
                'logout_time' => null,
                'accepted' => 0,
                'rejected' => 0,
                'remembered' => 0,
            ]
        );
    }
}
