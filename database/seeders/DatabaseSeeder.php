<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 後台選單設定
        $this->call(AdminMenuSeeder::class);
        $this->call(AdminRoleMenuSeeder::class);
        $this->call(UsersSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // 停用外键檢查

        DB::table('note_attributes')->truncate();
        DB::table('notes')->truncate();
        DB::table('attributes')->truncate();

        \App\Models\Attribute::factory(10)->create();

        $number = 70;        
        \App\Models\Note::factory(1*$number)->create();
        \App\Models\NoteAttribute::factory(3*$number)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // 啟用外键檢查
    }
}
