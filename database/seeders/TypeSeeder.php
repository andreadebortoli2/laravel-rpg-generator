<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myJsonData = file_get_contents(database_path('types-db.json'));
        $types = json_decode($myJsonData, true);

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->slug = Str::slug($newType->name, '-');
            $newType->desc = $type['desc'];
            $newType->save();
        }
    }
}
