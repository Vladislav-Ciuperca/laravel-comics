@extends('layouts.app')

@section('content')
    <h1>prova</h1>
    <h2>{{ $msg }}</h2>
    <h3>{{ $description }}</h3>

    @foreach ($studenti as $alunno)
        <li>{{ $alunno }}</li>
    @endforeach

    @if (count($studenti) > 3)
        <p>ci sono piu di 3 studenti</p>
    @else
        <p>ci sono mano di 3 okokok</p>
    @endif
@endsection
