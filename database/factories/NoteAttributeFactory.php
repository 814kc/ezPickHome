<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\NoteAttribute>
 */
class NoteAttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => fake()->numberBetween(1,5) ,
            'note_id' => \App\Models\Note::inRandomOrder()->value('id'),
            'attribute_id' => \App\Models\Attribute::inRandomOrder()->value('id')
        ];
    }
}
