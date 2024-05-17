@extends('layouts.app')

@section('page-title', 'Create')

@section('content')


    <div class="container">
        <form action="{{ route('characters.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="name" />
                <small id="helpId" class="form-text text-muted">Add name to you character</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                    placeholder="description" />
                <small id="helpId" class="form-text text-muted">Add name to you character</small>
            </div>
            <div class="mb-3">
                <label for="attack" class="form-label">attack</label>
                <input type="text" class="form-control" name="attack" id="attack" aria-describedby="helpId"
                    placeholder="attack" />
                <small id="helpId" class="form-text text-muted">Add attack to you character</small>
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">defense</label>
                <input type="text" class="form-control" name="defense" id="defense" aria-describedby="helpId"
                    placeholder="defense" />
                <small id="helpId" class="form-text text-muted">Add defense to you character</small>
            </div>
            <div class="mb-3">
                <label for="speed" class="form-label">speed</label>
                <input type="text" class="form-control" name="speed" id="speed" aria-describedby="helpId"
                    placeholder="speed" />
                <small id="helpId" class="form-text text-muted">Add speed to you character</small>
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>
    </div>

@endsection
