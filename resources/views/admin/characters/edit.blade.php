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

            <form action="{{ route('admin.characters.update', $character) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" aria-describedby="helpId" placeholder="name"
                        value="{{ old('name', $character->name) }}" />
                    <small id="helpId" class="form-text text-light">Edit name to your character</small>
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
                            <option value="{{ $type->id }}"
                                {{ $type->id == old('type_id', $character->type_id) ? 'selected' : '' }}>
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
                        id="attack" aria-describedby="helpId" placeholder="attack"
                        value="{{ old('attack', $character->attack) }}" />
                    <small id="helpId" class="form-text text-light">Edit attack to your character</small>
                    @error('attack')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="defense" class="form-label">Defense</label>
                    <input type="text" class="form-control @error('defense') is-invalid @enderror" name="defense"
                        id="defense" aria-describedby="helpId" placeholder="defense"
                        value="{{ old('defense', $character->defense) }}" />
                    <small id="helpId" class="form-text text-light">Edit defense to your character</small>
                    @error('defense')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" class="form-control @error('speed') is-invalid @enderror" name="speed"
                        id="speed" aria-describedby="helpId" placeholder="speed"
                        value="{{ old('speed', $character->speed) }}" />
                    <small id="helpId" class="form-text text-light">Edit speed to your character</small>
                    @error('speed')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                        id="image" aria-describedby="helpIdImage" />
                    <small id="helpIdImage" class="form-text text-muted">Insert the character image</small>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 d-flex flex-wrap gap-2">
                    @if ($errors->any())
                        <div>
                            <span>Insert the items used by your character:</span>
                            <div class="d-flex m-3 justify-content-between flex-wrap">
                                @foreach ($items as $item)
                                    <div class="form-check">
                                        <input name="items[]" class="form-check-input" type="checkbox"
                                            value="{{ $item->id }}" id="items-{{ $item->id }}"
                                            {{ in_array($item->id, old('items', [])) ? 'checked' : '' }} />
                                        <label class="form-check-label"
                                            for="items-{{ $item->id }}">{{ $item->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('items')
                                <div class="text-danger py-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @else
                        <div>
                            <span>Insert the items used by your character:</span>
                            <div class="d-flex m-3 justify-content-between flex-wrap">
                                @foreach ($items as $item)
                                    <div class="form-check">
                                        <input name="items[]" class="form-check-input" type="checkbox"
                                            value="{{ $item->id }}" id="items-{{ $item->id }}"
                                            {{ $character->items()->get()->contains($item->id)? 'checked': 'no' }} />
                                        <label class="form-check-label"
                                            for="items-{{ $item->id }}">{{ $item->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('items')
                                <div class="text-danger py-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-success">
                    Edit
                </button>


            </form>
        </div>
    </section>
@endsection
