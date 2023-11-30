<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AffectationFormation>
 */
class AffectationFormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'formation_id' => \App\Models\Formation::inRandomOrder()->first()->id,
            'niveau_id' => \App\Models\Niveau::inRandomOrder()->first()->id,
        ];
    }
}