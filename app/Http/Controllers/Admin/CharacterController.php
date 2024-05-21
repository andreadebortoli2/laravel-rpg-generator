<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $characters = Character::orderByDesc('id')->paginate(8);

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $data = $request->all();

        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;

        Character::create($data);

        return to_route('admin.characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {


        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->all();

        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;

        $character->update($data);

        return to_route('admin.characters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return back();
    }
}
