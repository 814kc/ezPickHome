<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_menu')->truncate();

        DB::table('admin_menu')->insert([
            [ 'id' => 1, 'parent_id' => 0, 'order' => 1, 'title' => '面板', 'icon' => 'fa-bar-chart', 'uri' => '/', 'permission' => null, 'created_at' => null, 'updated_at' => null ],
            [ 'id' => 2, 'parent_id' => 0, 'order' => 2, 'title' => '系統設置', 'icon' => 'fa-tasks', 'uri' => '', 'permission' => null, 'created_at' => null, 'updated_at' => null ],
            [ 'id' => 3, 'parent_id' => 2, 'order' => 3, 'title' => '管理員', 'icon' => 'fa-user-secret', 'uri' => 'auth/users', 'permission' => null, 'created_at' => null, 'updated_at' => '2023-07-21 11:24:21' ],
            [ 'id' => 4, 'parent_id' => 2, 'order' => 4, 'title' => '角色', 'icon' => 'fa-sliders', 'uri' => 'auth/roles', 'permission' => null, 'created_at' => null, 'updated_at' => '2023-07-21 11:25:57' ],
            [ 'id' => 5, 'parent_id' => 2, 'order' => 5, 'title' => '權限', 'icon' => 'fa-ban', 'uri' => 'auth/permissions', 'permission' => null, 'created_at' => null, 'updated_at' => null ],
            [ 'id' => 6, 'parent_id' => 2, 'order' => 6, 'title' => '選單設定', 'icon' => 'fa-bars', 'uri' => 'auth/menu', 'permission' => null, 'created_at' => null, 'updated_at' => null ],
            [ 'id' => 7, 'parent_id' => 2, 'order' => 7, 'title' => '操作紀錄', 'icon' => 'fa-history', 'uri' => 'auth/logs', 'permission' => null, 'created_at' => null, 'updated_at' => null ],
            [ 'id' => 8, 'parent_id' => 0, 'order' => 0, 'title' => '筆記', 'icon' => 'fa-book', 'uri' => '/notes', 'permission' => '*', 'created_at' => '2023-07-21 11:17:58', 'updated_at' => '2023-07-21 11:17:58' ],
            [ 'id' => 9, 'parent_id' => 0, 'order' => 0, 'title' => '屬性', 'icon' => 'fa-hashtag', 'uri' => '/attributes', 'permission' => '*', 'created_at' => '2023-07-21 11:18:34', 'updated_at' => '2023-07-21 11:18:34' ],
            [ 'id' => 10, 'parent_id' => 0, 'order' => 0, 'title' => '關聯屬性', 'icon' => 'fa-sort-numeric-asc', 'uri' => 'notes_attribute', 'permission' => '*', 'created_at' => '2023-07-21 11:19:18', 'updated_at' => '2023-07-21 11:19:18' ],
            [ 'id' => 11, 'parent_id' => 0, 'order' => 0, 'title' => '用戶', 'icon' => 'fa-user', 'uri' => '/users', 'permission' => '*', 'created_at' => '2023-07-21 11:24:07', 'updated_at' => '2023-07-21 11:24:07' ],
        ]);
    }
}
