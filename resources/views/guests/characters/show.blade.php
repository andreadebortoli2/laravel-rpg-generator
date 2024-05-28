@extends('layouts.app')

@section('page-title', 'character')

@section('content')
    <section id="show-characters" class="py-5">
        <div class="container">
            <a class="btn btn-secondary" href="{{ route('characters.index') }}">Go Back</a>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4 class="card-title text-center pb-2">{{ $character['name'] }}</h4>
                            <ul class="card-text list-unstyled d-flex flex-column gap-2">
                                <li>
                                    <strong>Attack:</strong> {{ $character['attack'] }}
                                </li>
                                <li>
                                    <strong>Defense:</strong> {{ $character['defense'] }}
                                </li>
                                <li>
                                    <strong>Speed:</strong> {{ $character['speed'] }}
                                </li>
                                <li>
                                    <p>{{ $character['description'] }}</p>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
