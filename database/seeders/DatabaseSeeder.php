<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(10)->create();
        \App\Models\Note::factory(10)->create();
        \App\Models\Attribute::factory(30)->create();
        \App\Models\NoteAttribute::factory(50)->create();

    }
}
