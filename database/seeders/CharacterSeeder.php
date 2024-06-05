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

        $characters = config('characters-db');

        foreach ($characters as $character) {

            $newCharacter = new Character();

            $newCharacter->name = $character['name'];
            $newCharacter->slug = Str::of($newCharacter->name)->slug('-');
            $newCharacter->image = $character['image'];
            $newCharacter->attack = $faker->randomNumber(2, true);
            $newCharacter->defense = $faker->randomNumber(2, true);
            $newCharacter->speed = $faker->randomNumber(2, true);
            $newCharacter->type_id = $faker->numberBetween(1, 12);
            $newCharacter->save();
        }

        foreach (Character::all() as $character) {
            $character->items()->attach($faker->numberBetween(1, 37));
        }
    }
}
