<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        $types = Type::all();
        $items = Item::all();
        return view('admin.characters.create', compact('types', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {
            $image = Storage::put('characters-images', $request['image']);
            $data['image'] = $image;
        }
        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;

        $character = Character::create($data);

        if ($request->has('items')) {
            $character->items()->attach($data['items']);
        };

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
        $types = Type::all();
        $items = Item::all();
        return view('admin.characters.edit', compact('character', 'types', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();

        if ($request->has('image')) {
            if ($character->image) {
                Storage::delete($character->image);
            }
            $image = Storage::put('characters-images', $request['image']);
            $data['image'] = $image;
        }

        $slug = Str::slug($request->name, '-');
        $data['slug'] = $slug;

        $character->update($data);

        if ($request->has('items')) {
            $character->items()->attach($data['items']);
        } else {
            $character->items()->sync([]);
        };

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
