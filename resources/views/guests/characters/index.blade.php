@extends('layouts.app')

@section('page-title', 'Characters')

@section('content')

    <div class="container py-5 ">
        <div class="table-responsive">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Attack</th>
                        <th scope="col">Defense</th>
                        <th scope="col">Speed</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($characters as $character)
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row" colspan="6">No record</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

@endsection
