@extends('layouts.app')

@section('page-title', 'item')

@section('content')
    <div class="container">
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
    </div>
@endsection
