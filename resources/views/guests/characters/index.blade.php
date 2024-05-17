@extends('layouts.app')

@section('page-title', 'Characters')

@section('content')

    <div class="container py-5 ">
        <div class="d-flex justify-content-end py-4">
            <a class="btn btn-success mx" href="{{ route('characters.create') }}">Add Character</a>
        </div>
        <div class="table-responsive">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Attack</th>
                        <th scope="col">Defense</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($characters as $character)
                        <tr class="">
                            <td scope="row">{{ $character->id }}</td>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defense }}</td>
                            <td>{{ $character->speed }}</td>
                            <td>
                                <a href="{{ route('characters.show', $character) }} " class="btn btn-light ">View</a>
                                <a href="{{ route('characters.edit', $character) }}" class="btn btn-light ">Edit</a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $character->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $character->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId-{{ $character->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId-{{ $character->id }}">
                                                    Modal title
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
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

                                

                            </td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row" colspan="6">No record</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

@endsection
