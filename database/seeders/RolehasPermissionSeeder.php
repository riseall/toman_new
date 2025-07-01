<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolehasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nonaktifkan foreign key checks sementara
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Kosongkan tabel role_has_permissions
        DB::table('role_has_permissions')->truncate();

        // Data mapping role_id dan permission_id sesuai yang kamu kirim
        $data = [
            // role_id => [permission_id, permission_id, ...]
            1 => [1,2,3,4,5,6,8,9,10,11,12,13,15,16,17,18,19,20,21,22,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,64,65,66,67,68,69,70,71,72,73,74,75,76],
            2 => [1,2,3,4,5,6,8,9,10,11,12,13,15,17,18,19,20,21,22,23,24,25,26,27,28,29,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,62,65,67,68,70,71],
            3 => [15,17,20,24,34,35,65],
            5 => [15,37,38,39,41,46,65],
            7 => [15],
            9 => [1,4,8,11,15,17,20,24,29,33,34,35,36,37,38,39,41,46,65],
            11 => [15,17,20,24,34,35,37,38,39,41,46,65],
        ];

        $rows = [];
        foreach ($data as $role_id => $permissions) {
            foreach ($permissions as $permission_id) {
                $rows[] = [
                    'permission_id' => $permission_id,
                    'role_id' => $role_id,
                ];
            }
        }

        // Insert ke tabel role_has_permissions
        DB::table('role_has_permissions')->insert($rows);

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
