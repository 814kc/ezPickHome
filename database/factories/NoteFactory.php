<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Note;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Note::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
     public function definition()
     {
         return [
            'user_id' => \App\Models\User::inRandomOrder()->value('id'),
            'title' => fake()->realText(30),
            'content' => fake()->realText()
         ];
     }
}
