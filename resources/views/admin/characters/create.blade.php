@extends('layouts.admin')

@section('page-title', 'Create')

@section('content')


    <section id="add-character" class="form-character py-4">
        <div class="container">
            <h2 class="text-center">Add new character</h2>
            <div class="d-flex justify-content-end py-4">
                <a class="btn btn-secondary " href="{{ route('admin.characters.index') }}">Go back</a>
            </div>

            @include('partials.validations-errors')

            <form action="{{ route('admin.characters.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameId"
                        placeholder="name" value="{{ old('name') }}" />
                    <small id="nameId" class="form-text text-light">Add name to you character</small>
                </div>

                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" class="form-control" name="attack" id="attack" aria-describedby="attackId"
                        placeholder="attack" value="{{ old('attack') }}" />
                    <small id="attackId" class="form-text text-light">Add attack to you character</small>
                </div>
                <div class="mb-3">
                    <label for="defense" class="form-label">Defense</label>
                    <input type="text" class="form-control" name="defense" id="defense" aria-describedby="defenseId"
                        placeholder="defense" value="{{ old('defense') }}" />
                    <small id="defenseId" class="form-text text-light">Add defense to you character</small>
                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" class="form-control" name="speed" id="speed" aria-describedby="speedId"
                        placeholder="speed" value="{{ old('speed') }}" />
                    <small id="speedId" class="form-text text-light">Add speed to you character</small>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="description">{{ old('description') }}</textarea>
                    <small id="descriptionId" class="form-text text-light">Add description to you character</small>
                </div>

                <button type="submit" class="btn btn-success">
                    Create
                </button>


            </form>
        </div>
    </section>
@endsection
