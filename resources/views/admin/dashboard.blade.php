@extends('layouts.admin')

@section('content')
    <section class="bg-dark">
        <div class="container py-4">
            <h2 class="fs-4 text-white my-4">
                {{ __('Dashboard') }}
            </h2>
            <div class="row justify-content-center">
                <div class="col pb-5">
                    <div class="card">
                        <div class="card-header">{{ __('User Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}

                            <p class="pt-4">Check your Characters and your Items</p>

                            <div class="actions pt-4">
                                <a href="{{ route('admin.characters.index') }}"
                                    class="btn btn-outline-danger">Characters</a>
                                <a href="{{ route('admin.items.index') }}" class="btn btn-outline-danger">Items</a>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/logo.png') }}" class="opacity-25 img-fluid text-center" alt="">
        </div>
        
    </section>
@endsection
