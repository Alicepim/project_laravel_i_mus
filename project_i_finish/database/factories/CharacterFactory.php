<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'race' => $this->faker->randomElement(['Human', 'Elf', 'Dwarf', 'Orc']),
            'class' => $this->faker->randomElement(['Warrior', 'Mage', 'Thief']),
            'level' => $this->faker->numberBetween(1, 50),
            'strength' => $this->faker->numberBetween(10, 20),
            'dexterity' => $this->faker->numberBetween(10, 20),
            'constitution' => $this->faker->numberBetween(10, 20),
            'intelligence' => $this->faker->numberBetween(10, 20),
            'wisdom' => $this->faker->numberBetween(10, 20),
            'charisma' => $this->faker->numberBetween(10, 20),
        ];
    }
}
