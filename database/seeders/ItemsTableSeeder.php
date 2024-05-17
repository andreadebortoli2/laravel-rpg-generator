<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myJsonData = file_get_contents(database_path('items-db.json'));
        $items = json_decode($myJsonData, true);

        foreach ($items as $item) {
            $newItem = new Item();
            $newItem->name = $item['name'];
            $newItem->slug = $item['slug'];
            $newItem->type = $item['type'];
            $newItem->category = $item['category'];
            $newItem->weight = $item['weight'];
            $newItem->cost = $item['cost'];
            $newItem->damage_dice = $item['damage_dice'];
            //dd($newItem);
            $newItem->save();
        }
    }
}
