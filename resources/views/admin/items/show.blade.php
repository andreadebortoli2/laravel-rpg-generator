@extends('layouts.admin')

@section('page-title', 'items')

@section('content')

    <section id="show-item" class="py-4">

        <div class="container">
            <h3 class="text-center">{{ $item->name }}</h3>
            <div class="row justify-content-center align-items-center py-5 h-100">
                <div class="col-6 text-center ">
                    <h5>Description:</h5>
                    <p>
                        {{ $item->type }}
                    </p>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled d-flex flex-column gap-3 align-items-center">
                        <li>
                            <h5 class="d-inline me-3">Category:</h5>
                            <strong>{{ $item->category }}</strong>
                        </li>
                        <li>
                            <h5 class="d-inline me-3">Weight: </h5>
                            <strong>{{ $item->weight }}</strong>
                        </li>
                        <li>
                            <h5 class="d-inline me-3">Cost: </h5>
                            <strong>{{ $item->cost }}</strong>
                        </li>
                        <li>
                            <h5 class="d-inline me-3">Damage Dice: </h5>
                            <strong>{{ $item->damage_dice }}</strong>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="actions text-center py-4">
                <a href="{{ route('admin.items.index', $item) }} " class="btn btn-secondary">Go back</a>
                <a href="{{ route('admin.items.edit', $item) }}" class="btn btn-warning">Edit</a>
                <!-- Modal trigger button -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $item->id }}">
                    Delete
                </button>

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId-{{ $item->id }}" tabindex="-1" data-bs-backdrop="static"
                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $item->id }}"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId-{{ $item->id }}">
                                    Delete item
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">Attention! You are deleting this item, this
                                action
                                is irreversible. Do you want to continue?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    No, Go Back
                                </button>
                                <form action="{{ route('admin.items.destroy', $item) }}" method="post">

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
