<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    public function cadastro(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'idade' => 'required|integer',
            'telefone' => 'required|string|max:12',
            'cpf' => 'required|string|max:11|unique:users,cpf',
            'senha' => 'required|string|min:6',
            'data_nascimento' => 'required|date',
            'cep' => 'required|string|max:9',
            'estado' => 'required|string|max:20',
            'cidade' => 'required|string|max:40',
            'bairro' => 'required|string|max:30',
            'rua' => 'required|string|max:50',
        ]);

        // Salvar no banco
        User::create([
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email'],
            'idade' => $validatedData['idade'],
            'telefone' => $validatedData['telefone'],
            'cpf' => $validatedData['cpf'],
            'senha' => bcrypt($validatedData['senha']), // Senha criptografada
            'data_nascimento' => $validatedData['data_nascimento'],
            'cep' => $validatedData['cep'],
            'estado' => $validatedData['estado'],
            'cidade' => $validatedData['cidade'],
            'bairro' => $validatedData['bairro'],
            'rua' => $validatedData['rua'],
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'senha' => $request->password], $request->remember)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->route('login')
                         ->withErrors(['email' => 'Credenciais inválidas.'])
                         ->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
