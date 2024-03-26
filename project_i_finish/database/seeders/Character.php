<?php

namespace Database\Seeders;

use Database\Factories\CharacterFactory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class Character extends Seeder
{

    public function run(): void
    {
        CharacterFactory::new()->count(10)->create();
    }
}
