@extends('layouts.admin')

@section('page-title', 'Edit')

@section('content')


    <section id="add-character" class="form-character py-4">
        <div class="container">
            <h2 class="text-center">Add new character</h2>
            <div class="d-flex justify-content-end py-4">
                <a class="btn btn-secondary " href="{{ route('admin.items.index') }}">Go back</a>
            </div>

            @include('partials.validations-errors')

            <form action="{{ route('admin.items.update', $item) }}" method="post">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameId"
                        placeholder="name" value="{{ old('name', $item->name) }}" />
                    <small id="nameId" class="form-text text-light">Add name to you character</small>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="typeId"
                        placeholder="type" value="{{ old('type', $item->type) }}" />
                    <small id="typeId" class="form-text text-light">Add type to you character</small>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">category</label>
                    <input type="text" class="form-control" name="category" id="category" aria-describedby="categoryId"
                        placeholder="category" value="{{ old('category', $item->category) }}" />
                    <small id="categoryId" class="form-text text-light">Add category to you character</small>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">weight</label>
                    <input type="text" class="form-control" name="weight" id="weight" aria-describedby="weightId"
                        placeholder="weight" value="{{ old('weight', $item->weight) }}" />
                    <small id="weightId" class="form-text text-light">Add weight to you character</small>
                </div>

                <div class="mb-3">
                    <label for="cost" class="form-label">cost</label>
                    <input type="text" class="form-control" name="cost" id="cost" aria-describedby="costId"
                        placeholder="cost" value="{{ old('cost', $item->cost) }}" />
                    <small id="costId" class="form-text text-light">Add cost to you character</small>
                </div>

                <div class="mb-3">
                    <label for="damage_dice" class="form-label">damage dice</label>
                    <input type="text" class="form-control" name="damage_dice" id="damage_dice"
                        aria-describedby="damage_diceId" placeholder="damage_dice"
                        value="{{ old('damage_dice', $item->damage_dice) }}" />
                    <small id="damage_diceId" class="form-text text-light">Add damage dice to you character</small>
                </div>



                <button type="submit" class="btn btn-success">
                    Edit
                </button>


            </form>
        </div>
    </section>
@endsection
