<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroUsuarioController extends Controller
{
    public function listar()
    {
        //Busca os registros de usuarios e mostra na tela (view) pelo metodo compact
        $registros = Usuario::all();
        return view('cadastro.usuario.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('cadastro.usuario.adicionar');
    }
}
