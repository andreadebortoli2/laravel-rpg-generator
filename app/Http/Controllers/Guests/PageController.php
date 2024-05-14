<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Item;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("guests.home");
    }

   

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view("guests.item");
    }

    
}
