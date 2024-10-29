<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // Mostrar formulário de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Lógica de registro de usuário
    public function register(Request $request)
    {
        // Validação básica dos dados de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criar o usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro realizado com sucesso! Faça login.');
    }
}
