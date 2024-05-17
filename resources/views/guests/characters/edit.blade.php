@extends('layouts.app')

@section('page-title', 'Create')

@section('content')


    <div class="container">
        @include('partials.validations-errors')

        <form action="{{ route('characters.update', $character) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="name" value="{{ old('name', $character->name) }}" />
                <small id="helpId" class="form-text text-muted">Add name to you character</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ old('description', $character->description) }}</textarea>
                <small id="helpId" class="form-text text-muted">Add name to you character</small>
            </div>
            <div class="mb-3">
                <label for="attack" class="form-label">attack</label>
                <input type="text" class="form-control" name="attack" id="attack" aria-describedby="helpId"
                    placeholder="attack" value="{{ old('attack', $character->attack) }}" />
                <small id="helpId" class="form-text text-muted">Add attack to you character</small>
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">defense</label>
                <input type="text" class="form-control" name="defense" id="defense" aria-describedby="helpId"
                    placeholder="defense" value="{{ old('defense', $character->defense) }}" />
                <small id="helpId" class="form-text text-muted">Add defense to you character</small>
            </div>
            <div class="mb-3">
                <label for="speed" class="form-label">speed</label>
                <input type="text" class="form-control" name="speed" id="speed" aria-describedby="helpId"
                    placeholder="speed" value="{{ old('speed', $character->speed) }}" />
                <small id="helpId" class="form-text text-muted">Add speed to you character</small>
            </div>


            <a class="btn btn-secondary " href="{{ route('characters.index') }}">Go to back</a>

            
            <button type="submit" class="btn btn-primary">
                Edit
            </button>


        </form>
    </div>

@endsection
