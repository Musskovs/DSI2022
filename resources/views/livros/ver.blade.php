@extends('templates/layout')

@section('titulo', 'Página de Livros - Ver')

@section('body')
    <h1>Livros - Ver</h1>

    <h2>{{$livros->titulo}}</h2>
    <h2>{{$livros->autor}}</h2>

    <h3>Páginas: {{$livros->paginas}}</h3>
    <h3>R$ {{ number_format($livros->preco, 2) }}</h3>

    {{-- Outra forma de mostrar as informações na tela --}}
    {{-- Tanto ->preco quanto ['preco'] --}}
    <p><strong>Sinopse:</strong> {{ $livros['sinopse'] }}</p>
@endsection