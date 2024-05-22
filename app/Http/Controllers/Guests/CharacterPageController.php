<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("guests.characters.index", ['characters' => Character::orderByDesc('id')->paginate()]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view("guests.characters.show", compact('character'));
    }
}
