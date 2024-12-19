<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UsuarioController extends Controller {
    /**
     * Exibir o formulário de cadastro.
     */
    public function exibirFormularioCadastro()
    {
        return view('Cadastro.cadastro'); // Retorna a view do formulário de cadastro
    }

    /**
     * Salvar um novo usuário no banco de dados.
     */
    public function salvarUsuario(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'idade' => 'required|integer|min:0|max:150',
            'telefone' => 'required|string|max:15',
            'cpf' => 'required|string|size:11|unique:users,cpf',
            'senha' => 'required|min:6',
            'data_nascimento' => 'required|date',
            'cep' => 'required|string|size:8',
            'estado' => 'required|string|max:2',
            'cidade' => 'required|string|max:100',
            'bairro' => 'required|string|max:100',
            'rua' => 'required|string|max:255',
        ]);

        // Salvar usuário no banco de dados
        User::create([
            'nome_completo' => $request->input('nome'),
            'email' => $request->input('email'),
            'idade' => $request->input('idade'),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),
            'password' => bcrypt($request->input('senha')),
            'data_nascimento' => $request->input('data_nascimento'),
            'cep' => $request->input('cep'),
            'estado' => $request->input('estado'),
            'cidade' => $request->input('cidade'),
            'bairro' => $request->input('bairro'),
            'rua' => $request->input('rua'),
        ]);

        return redirect()->route('login')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Exibir o formulário de login.
     */
    public function exibirFormularioLogin()
    {
        return view('Login.login'); // Retorna a view do formulário de login
    }

    /**
     * Validar as credenciais do usuário.
     */
    public function validarUsuario(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        // Verificar credenciais
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('senha')])) {
            return redirect()->route('login')->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }
}

