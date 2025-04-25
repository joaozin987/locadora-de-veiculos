<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {


    public function create()
    {
        return view('Cadastro.cadastro');
    }
   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:200',
            'email' => 'required|min:5|max:200|email',
            'password' => 'required|min:2|max:200',
        ]);
        
       if (User::where('email', $validated['email'])->exists()) { 
            return back()->with('status' , 'Esse Usuario já existe ');
        } else {
            $user = new User();
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->save();
            
            return redirect()->route('Login')->with('success', 'Usuário cadastrado com sucesso. Faça login.');
            
        }
    }
    
    public function loginForm()
    {
        return view('Login.login');
    }
    
}
?>