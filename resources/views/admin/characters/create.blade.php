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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" aria-describedby="nameId" placeholder="name" value="{{ old('name') }}" />
                    <small id="nameId" class="form-text text-light">Add name to your character</small>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Type</label>
                    <select class="form-select form-select-md @error('type_id') is-invalid @enderror" name="type_id"
                        id="type_id">
                        <option selected disabled>Select one</option>

                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" class="form-control @error('attack') is-invalid @enderror" name="attack"
                        id="attack" aria-describedby="attackId" placeholder="attack" value="{{ old('attack') }}" />
                    <small id="attackId" class="form-text text-light">Add attack to your character</small>
                    @error('attack')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="defense" class="form-label">Defense</label>
                    <input type="text" class="form-control @error('defense') is-invalid @enderror" name="defense"
                        id="defense" aria-describedby="defenseId" placeholder="defense" value="{{ old('defense') }}" />
                    <small id="defenseId" class="form-text text-light">Add defense to your character</small>
                    @error('defense')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" class="form-control @error('speed') is-invalid @enderror" name="speed"
                        id="speed" aria-describedby="speedId" placeholder="speed" value="{{ old('speed') }}" />
                    <small id="speedId" class="form-text text-light">Add speed to your character</small>
                    @error('speed')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                        rows="5" placeholder="description">{{ old('description') }}</textarea>
                    <small id="descriptionId" class="form-text text-light">Add description to your character</small>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">
                    Create
                </button>


            </form>
        </div>
    </section>
@endsection
