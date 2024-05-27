@extends('layouts.app')

@section('page-title', 'home')

@section('content')
    <section id="home" class="p-1 vh-100 d-flex align-items-center">
        <div class="container py-3">
            <div class="row align-items-md-stretch justify-content-center">
                <div class="col-12">
                    <div class="h-100 p-5 text-white bg-secondary border rounded-3">
                        <h2>Welcome to RPG Generator</h2>
                        <p>
                            Unleash your imagination and craft the perfect character for your next role-playing game.
                            Whether you’re a seasoned adventurer or new to the world of RPGs, our intuitive generator offers
                            endless customization options to bring your hero to life.
                        </p>
                        <div class="py-2 ">
                            <a class="btn btn-warning" href="{{ route('items.index') }}">Items List</a>
                            <a class="btn btn-warning" href="{{ route('characters.index') }}">Characters List</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
