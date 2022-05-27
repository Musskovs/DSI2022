@extends('templates/layout')

@section('titulo', 'Página de Livros - Criar')

@section('body')
    <h1>Produtos - Criar</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('livro/inserir') }}" method="post">
        @csrf
        
        <p><input value="{{ old('titulo')}}" type="text"  name="titulo" placeholder="Titulo do livro"></p>
        <p><input value="{{ old('autor')}}" type="text" name="autor" placeholder="Autor do livro"></p>
        <p><input value="{{ old('paginas')}}" type="number" name="paginas" placeholder="Páginas"></p>
        <p><textarea value="{{ old('sinopse')}}" name="sinopse" cols="20" rows="10" placeholder="Sinopse do livro"></textarea></p>
        <p><input value="{{ old('preco')}}" type="number" name="preco" placeholder="Preço"></p>

        <p><input type="submit" value="Gravar"></p>

    </form>
@endsection