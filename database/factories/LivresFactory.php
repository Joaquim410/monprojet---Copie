<?php

namespace Database\Factories;

use App\Models\Auteurs;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livres>
 */
class LivresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(2),
            'extrait' => $this->faker->text(150),
            'auteur_id' => Auteurs::all()->random()->id,
           
            
          
        ];
    }
}
