@extends('layouts.app')

@section('page-title', 'characters list')

@section('content')
    <section id="characters" class="py-3">
        <div class="container">
            <h2 class="py-2 text-center">Characters</h2>
            <div class="row row-cols-5 py-3 g-4">
                @foreach ($characters as $character)
                    <div class="col">
                        <a href="{{ route('characters.show', $character) }}" style="text-decoration: none">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $character['name'] }}</h4>
                                    <ul class="card-text list-unstyled">

                                        <li>
                                            <strong>Attack:</strong> {{ $character['attack'] }}
                                        </li>
                                        <li>
                                            <strong>Defense:</strong> {{ $character['defense'] }}
                                        </li>
                                        <li>
                                            <strong>Speed:</strong> {{ $character['speed'] }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $characters->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
