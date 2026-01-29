<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Atv 1
    public function index()
    {
        return "Lista de cursos";
    }

    // Atv 2
    public function create()
    {
        return view('cursos.create');
    }

    // Atv 3
    public function listagem()
    {
        $cursos = ['Redes de Computadores', 'Agropecuária', 'Química'];
        
        // Passando a variável $cursos para a view com o nome 'cursos'
        return view('cursos.listagem', ['cursos' => $cursos]);
    }

    // Atv 4
    public function show($id)
    {
        return "Curso selecionado: ID " . $id;
    }

    // Atv 5
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Curso cadastrado: " . $nome;
    }
}