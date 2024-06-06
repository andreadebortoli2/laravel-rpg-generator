<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class typeController extends Controller
{
    public function show($slug)
    {
        $singleType = Type::all()->where('slug', $slug)->first();


        if ($singleType) {
            return  response()->json([
                'success' => true,
                'type' => $singleType
            ]);
        } else {
            return response()->json([
                'success' => false,
                'type' => '404'
            ]);
        }
    }
}
