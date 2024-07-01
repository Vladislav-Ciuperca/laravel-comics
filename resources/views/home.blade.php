@extends('layouts.app')


@section('title', 'Lista Fumetti')

@section('content')


    <div class="container">

        @foreach ($comics as $indice => $fumetto)
            <a href="/home/{{$indice}}">
                @include('partials.card')
            </a>
        @endforeach

    </div>

@endsection
