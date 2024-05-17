@extends('layouts.app')

@section('page-title', 'Characters')

@section('content')

    <div class="container">
        <div class="col text-center ">
            <h3>{{ $character->name }}</h3>
            <p><strong>{{ $character->description }}</strong></p>
            <p><strong>{{ $character->attack }}</strong></p>
            <p><strong>{{ $character->defense }}</strong></p>
            <p><strong>{{ $character->speed }}</strong></p>
        </div>

        <div class="actions text-center">
            <a href="{{ route('characters.index', $character) }} " class="btn btn-secondary ">Go to back</a>
            <a href="{{ route('characters.edit', $character) }}" class="btn btn-secondary ">Edit</a>
            <!-- Modal trigger button -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#modalId-{{ $character->id }}">
                Delete
            </button>

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId-{{ $character->id }}" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $character->id }}"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId-{{ $character->id }}">
                                Modal title
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Body</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <form action="{{ route('characters.destroy', $character) }}" method="post">

                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
