<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Item;


class ItemPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("guests.items.index", ['items' => Item::orderByDesc('id')->paginate()]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view("guests.items.show", compact('item'));
    }
}
