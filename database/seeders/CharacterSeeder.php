<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 5; $i++) {

            $character = new Character();

            $character->name = $faker->words(3, true);
            $character->slug = Str::of($character->name)->slug('-');
            $character->description = $faker->paragraph();
            $character->attack = $faker->randomNumber(2, true);
            $character->defense = $faker->randomNumber(2, true);
            $character->speed = $faker->randomNumber(2, true);
            $character->type_id = $faker->numberBetween(1, 12);
            $character->save();
        }
    }
}
