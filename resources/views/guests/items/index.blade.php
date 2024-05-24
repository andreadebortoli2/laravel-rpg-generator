@extends('layouts.app')

@section('page-title', 'items list')

@section('content')
    <section id="items" class="py-3 ">
        <div class="container">
            <h2 class="py-2 text-center">Items</h2>
            <div class="row row-cols-5 py-3 g-4">
                @foreach ($items as $item)
                    <div class="col">
                        <a href="{{ route('items.show', $item) }}" style="text-decoration: none">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $item['name'] }}</h4>
                                    <ul class="card-text list-unstyled">
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
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $items->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
