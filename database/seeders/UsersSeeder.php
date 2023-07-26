<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // 停用外键檢查

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'id' => 1, 
            'name' => 'chieh', 
            'email' => 'yujia.chieh0814@gmail.com', 
            'email_verified_at' => null, 
            'password' => '$2y$10$Iwi5CLwx4ppsy8/D2qLaZu1APloa6vdgDwFeWIvgMicZ/lcEx4F0W', 
            'remember_token' => null, 
            'created_at' => '2023-07-21 10:48:03', 
            'updated_at' => '2023-07-21 10:48:03'
        ]);
        \App\Models\User::factory(20)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // 啟用外键檢查

    }
}
