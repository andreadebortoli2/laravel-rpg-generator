@extends('layouts.admin')

@section('page-title', 'types')

@section('content')

    <section id="types" class="py-5">
        <div class="container">
            <h2 class="text-center">types</h2>
            <div class="d-flex justify-content-center py-4">
                <a class="btn btn-success" href="{{ route('admin.types.create') }}">Add type</a>
            </div>
            <div class="table-responsive rounded">
                <table class="table table-warning table-bordered table-striped rounded">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="rounded">
                        @forelse ($types as $type)
                            <tr class="">
                                <td scope="row">{{ $type->id }}</td>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->slug }}</td>

                                <td>
                                     <a href="{{ route('admin.types.show', $type) }} "
                                        class="btn btn-primary btn-sm">👁‍🗨</a>
                                    <a href="{{ route('admin.types.edit', $type) }}"
                                        class="btn btn-dark btn-sm">🖊</a>
                                    <!-- Modal trigger button -->
                                                                         <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $type->id }}">
                                        🗑
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                                                         <div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $type->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId-{{ $type->id }}">
                                                        Delete type
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">Attention! You are deleting this type, this
                                                    action
                                                    is irreversible. Do you want to continue?</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        No, Go Back
                                                    </button>
                                                    <form action="{{ route('admin.types.destroy', $type) }}"
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
                                <td scope="row" colspan="4">No record</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            {{ $types->links('pagination::bootstrap-5') }}

        </div>

        <img src="{{ asset('img/logo.png') }}" class="opacity-25 img-fluid" alt="">
    </section>
@endsection
