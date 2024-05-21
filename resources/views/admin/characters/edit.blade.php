@extends('layouts.admin')

@section('page-title', 'Create')

@section('content')

    <section id="edit-character" class="form-character py-4">
        <div class="container">
            <h2 class="text-center">Edit character</h2>
            <div class="d-flex justify-content-end py-4">
                <a class="btn btn-secondary " href="{{ route('admin.characters.index') }}">Go back</a>
            </div>

            @include('partials.validations-errors')

            <form action="{{ route('admin.characters.update', $character) }}" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                        placeholder="name" value="{{ old('name', $character->name) }}" />
                    <small id="helpId" class="form-text text-light">Add name to you character</small>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{ old('description', $character->description) }}</textarea>
                    <small id="helpId" class="form-text text-light">Add name to you character</small>
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">attack</label>
                    <input type="text" class="form-control" name="attack" id="attack" aria-describedby="helpId"
                        placeholder="attack" value="{{ old('attack', $character->attack) }}" />
                    <small id="helpId" class="form-text text-light">Add attack to you character</small>
                </div>
                <div class="mb-3">
                    <label for="defense" class="form-label">defense</label>
                    <input type="text" class="form-control" name="defense" id="defense" aria-describedby="helpId"
                        placeholder="defense" value="{{ old('defense', $character->defense) }}" />
                    <small id="helpId" class="form-text text-light">Add defense to you character</small>
                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">speed</label>
                    <input type="text" class="form-control" name="speed" id="speed" aria-describedby="helpId"
                        placeholder="speed" value="{{ old('speed', $character->speed) }}" />
                    <small id="helpId" class="form-text text-light">Add speed to you character</small>
                </div>

                <button type="submit" class="btn btn-success">
                    Edit
                </button>


            </form>
        </div>
    </section>
@endsection