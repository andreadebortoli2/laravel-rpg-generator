@extends('layouts.app')

@section('page-title', 'Characters')

@section('content')

    <div class="container">
        <div class="col text-center ">
            <h3>{{$character->name}}</h3>
            <p><strong>>{{$character->description}}</strong></p>
            <p><strong>>{{$character->attack}}</strong></p>
            <p><strong>>{{$character->defense}}</strong></p>
            <p><strong>>{{$character->speed}}</strong></p>
        </div>
    </div>
    
@endsection