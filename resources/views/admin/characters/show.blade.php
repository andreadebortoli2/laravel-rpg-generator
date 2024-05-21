@extends('layouts.admin')

@section('page-title', 'Characters')

@section('content')

    <section id="show-character" class="py-4">

        <div class="container">
            <h3 class="text-center">{{ $character->name }}</h3>
            <div class="row justify-content-center align-items-center py-5 h-100">
                <div class="col-6 text-center ">
                    <h5>Description:</h5>
                    <p>
                        {{ $character->description }}
                    </p>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3 align-items-center">
                        <li>
                            <h5 class="d-inline me-3">Attack:</h5>
                            <strong>{{ $character->attack }}</strong>
                        </li>
                        <li>
                            <h5 class="d-inline me-3">Defense: </h5>
                            <strong>{{ $character->defense }}</strong>
                        </li>
                        <li>
                            <h5 class="d-inline me-3">Speed: </h5>
                            <strong>{{ $character->speed }}</strong>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="actions text-center py-4">
                <a href="{{ route('admin.characters.index', $character) }} " class="btn btn-secondary ">Go back</a>
                <a href="{{ route('admin.characters.edit', $character) }}" class="btn btn-warning ">Edit</a>
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
                                    Delete character
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">Attention! You are deleting this character, this
                                action
                                is irreversible. Do you want to continue?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    No, Go Back
                                </button>
                                <form action="{{ route('admin.characters.destroy', $character) }}" method="post">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        Yes, Delete it
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
