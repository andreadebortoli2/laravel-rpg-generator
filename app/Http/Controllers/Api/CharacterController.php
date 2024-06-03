<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::with('type', 'items')->orderByDesc('id')->paginate(8);
        return response()->json([
            'success' => true,
            'characters' => $characters,
        ]);
    }

    public function show($slug)
    {
        $singleCharacter = Character::with('type', 'items')->where('slug', $slug)->first();


        if ($singleCharacter) {
            return  response()->json([
                'success' => true,
                'character' => $singleCharacter
            ]);
        } else {
            return response()->json([
                'success' => false,
                'character' => '404'
            ]);
        }
    }
}
