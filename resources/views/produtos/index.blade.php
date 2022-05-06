@extends('templates/layout')

@section('titulo', 'Pagina de Produtos')

@section('body')

    <h1>Index de Produto</h1>
    <p><a href="{{route('produtos/criar')}}">Criar um produto</a></p>
    
@endsection