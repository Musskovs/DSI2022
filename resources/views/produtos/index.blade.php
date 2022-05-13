@extends('templates/layout')

@section('titulo', 'Pagina de Produtos')

@section('body')

    <h1>Index de Produto</h1>
    <p><a href="{{route('produtos/criar')}}">Criar um produto</a></p>

    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
        
        @foreach($produtos as $produto)
            <tr>
                <td>
                    <a href="{{route('produtos/ver', $produto->id)}}">
                        {{ $produto->nome }}
                    </a>
                </td>
                <td>{{ $produto->preco }}</td>
            </tr>
        @endforeach

    </table>
    
@endsection