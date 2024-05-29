@extends('layouts.admin')

@section('content')
    <div class="container">

        <form class="form-control bg-light p-4" action="{{ route('admin.types.update', $type) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input for name-->
            <div class="mb-3">
                <label for="name" class="form-label">Name type</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="nameHelper" placeholder="name" value="{{ old('name', $type->name) }}" />
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for name-->
            <div class="mb-3">
                <label for="name" class="form-label">Description</label>
                <input type="textarea" class="form-control @error('desc') is-invalid @enderror" name="desc"
                    id="desc" aria-describedby="descHelper" placeholder="desc" value="{{ old('desc', $type->desc) }}" />
                @error('desc')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Modify type</button>


        </form>
    </div>
@endsection
