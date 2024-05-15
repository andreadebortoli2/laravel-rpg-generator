@extends('layouts.app')

@section('page-title', 'items list')

@section('content')
    <div class="container">
        <h2>ITEMS LIST:</h2>
        <div class="row row-cols-5 py-3 g-4">
            @foreach ($items as $item)
                <div class="col">
                    <a href="{{ route('items.show', $item) }}" style="text-decoration: none">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item['name'] }}</h4>
                                <p class="card-text">
                                    <strong>Slug:</strong> {{ $item['slug'] }} <br>
                                    <strong>Type:</strong> {{ $item['type'] }} <br>
                                    <strong>Category:</strong> {{ $item['category'] }} <br>
                                    <strong>Weight:</strong> {{ $item['weight'] }} <br>
                                    <strong>Cost:</strong> {{ $item['cost'] }} <br>
                                    <strong>Damage Dice:</strong> {{ $item['damage_dice'] }} <br>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $items->links('pagination::bootstrap-5') }}
    </div>
@endsection
