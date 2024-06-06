<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($slug)
    {
        $singleItem = Item::all()->where('slug', $slug)->first();


        if ($singleItem) {
            return  response()->json([
                'success' => true,
                'item' => $singleItem
            ]);
        } else {
            return response()->json([
                'success' => false,
                'item' => '404'
            ]);
        }
    }
}
