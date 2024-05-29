@extends('layouts.admin')

@section('page-title', 'items')

@section('content')

    <section id="items" class="py-5">
        <div class="container">
            <h2 class="text-center">items</h2>
            <div class="d-flex justify-content-center py-4">
                <a class="btn btn-success px-3" href="{{ route('admin.items.create') }}">Add Item</a>
            </div>
            <div class="table-responsive rounded">
                <table class="table table-success table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Type</th>
                            <th scope="col">Category</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Cost</th>
                            <th scope="col">damage_dice</th>
                            <th scope="col">Actions</th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr class="">
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->cost }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->damage_dice }}</td>
                                <td>
                                    <a href="{{ route('admin.items.show', $item) }} "
                                        class="btn btn-primary btn-sm">👁‍🗨</a>
                                    <a href="{{ route('admin.items.edit', $item) }}" class="btn btn-dark btn-sm">🖊</a>
                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $item->id }}">
                                        🗑
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId-{{ $item->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
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
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        No, Go Back
                                                    </button>
                                                    <form action="{{ route('admin.items.destroy', $item) }}"
                                                        method="post">

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
            {{ $items->links('pagination::bootstrap-5') }}
            <img src="{{ asset('img/logo.png') }}" class="opacity-25 img-fluid" alt="">
        </div>

    </section>
@endsection
