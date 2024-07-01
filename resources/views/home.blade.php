@extends('layouts.app')


@section('title', 'Lista Fumetti')

@section('content')


    <div class="container">

        @foreach ($comics as $indice => $fumetto)
            @include('partials.card')
        @endforeach

    </div>

@endsection
