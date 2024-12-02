<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // Mostrar formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Lógica de login
    public function login(Request $request)
    {
        // Validação básica
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Tentar autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticação bem-sucedida, redirecionar
            return redirect()->route('profiles')->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['email' => 'As credenciais estão incorretas']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }
}
