<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index() {
        $livros = Livro::all();
        return view('livros/index', [
            'livros' => $livros,
            ]);
    }

    public function ver(Livro $id) {
        return view('livros/ver', [
            'livros' => $id,
        ]);
    }

    public function criar() {
        return view('livros/criar');
    }

    public function inserir(Request $form) {
        $dados = $form->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'paginas' => 'required',
            'sinopse' => 'required',
            'preco' => 'required',
        ]);

        Livro::create($dados);

        // $livro = new Livro();

        // $livro->nome = $form->nome;
        // $livro->preco = $form->preco;
        // $livro->descricao = $form->descricao;

        // $livro->save();

        return redirect()->route('livro');
    }
}
