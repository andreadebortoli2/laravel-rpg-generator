@extends('layouts.app')

@section('page-title', 'item')

@section('content')
    <section id="show-items" class="py-5 vh-100">
        <div class="container">
            <a class="btn btn-secondary" href="{{ route('items.index') }}">Go Back</a>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4 class="card-title text-center pb-2">{{ $item['name'] }}</h4>
                            <ul class="card-text list-unstyled d-flex flex-column gap-2">
                                <li>
                                    <strong>Slug:</strong> {{ $item['slug'] }}
                                </li>
                                <li>
                                    <strong>Type:</strong> {{ $item['type'] }}
                                </li>
                                <li>
                                    <strong>Category:</strong> {{ $item['category'] }}
                                </li>
                                <li>
                                    <strong>Weight:</strong> {{ $item['weight'] }}
                                </li>
                                <li>
                                    <strong>Cost:</strong> {{ $item['cost'] }}
                                </li>
                                <li>
                                    <strong>Damage Dice:</strong> {{ $item['damage_dice'] }}
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
