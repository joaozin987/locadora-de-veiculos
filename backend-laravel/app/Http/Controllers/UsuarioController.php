<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UsuarioController extends Controller {


    public function exibirFormularioCadastro()
    {
        return view('Cadastro.cadastro');
    }
   
    public function exibirFormularioLogin()
    {
        return view('Login.login');
    }
}
