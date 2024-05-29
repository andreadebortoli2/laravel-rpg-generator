@extends('layouts.admin')

@section('page-title', 'Characters')

@section('content')

    <section id="show-character" class="py-4">

        <div class="container">
            <h3 class="text-center">{{ $type->name }}</h3>
            <div class="row justify-content-center align-items-center py-5 h-100">
                <div class="col-6 text-center ">

                    <p>
                        {{ $type->desc }}
                    </p>
                </div>

            </div>
        </div>


        <div class="actions text-center py-4">
            <a href="{{ route('admin.types.index') }} " class="btn btn-secondary ">Go back</a>
            <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning ">Edit</a>
            <!-- Modal trigger button -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#modalId-{{ $type->id }}">
                Delete
            </button>

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $type->id }}"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId-{{ $type->id }}">
                                Delete type
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Attention! You are deleting this type, this
                            action
                            is irreversible. Do you want to continue?</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                No, Go Back
                            </button>
                            <form action="{{ route('admin.types.destroy', $type) }}" method="post">

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
