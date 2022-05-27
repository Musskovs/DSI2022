@extends('templates/layout')

@section('titulo', 'Pagina de Livros')

@section('body')

    <h1>Index de Livro</h1>
    <p><a href="{{route('livro/criar')}}">Criar um livro</a></p>

    <table border="1">
        <tr>
            <th>Livro</th>
            <th>Autor</th>
        </tr>
        
        @foreach($livros as $livro)
            <tr>
                <td>
                    <a href="{{route('livro/ver', $livro->id)}}">
                        {{ $livro->titulo }}
                    </a>
                </td>
                <td>{{ $livro->autor }}</td>
            </tr>
        @endforeach

    </table>
    
@endsection