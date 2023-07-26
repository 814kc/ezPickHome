<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRoleMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('admin_role_menu')->truncate();

        DB::table('admin_role_menu')->insert([
            'role_id' => 1, 'menu_id' => 2, 'created_at' => null, 'updated_at' => null,
            'role_id' => 1, 'menu_id' => 8, 'created_at' => null, 'updated_at' => null,
            'role_id' => 1, 'menu_id' => 9, 'created_at' => null, 'updated_at' => null,
            'role_id' => 1, 'menu_id' => 10, 'created_at' => null, 'updated_at' => null,
            'role_id' => 1, 'menu_id' => 11, 'created_at' => null, 'updated_at' => null,
        ]);
    }
}
