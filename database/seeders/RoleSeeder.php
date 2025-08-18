<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
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
        // Kosongkan tabel roles
        DB::table('roles')->truncate();

        // Insert roles dengan ID sesuai permintaan
        $roles = [
            ['id' => 1, 'name' => 'super_admin', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'admin_toti', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'toller', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'maklooner', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'visitor', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'viewer', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'manager', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'toller_maklooner', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('roles')->insert($roles);

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
