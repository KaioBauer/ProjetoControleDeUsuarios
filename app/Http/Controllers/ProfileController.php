<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Mostrar perfil do usuário logado
    public function showProfile()
    {
        $user = Auth::user(); // Obter o usuário autenticado
        return view('auth.profile', compact('user'));
    }

    // Mostrar todos os perfis
    public function showAllProfiles()
    {
        $users = User::all(); // Buscar todos os usuários
        return view('auth.profiles', compact('users'));
    }

    // Mostrar perfil individual por ID
    public function showProfileById($id)
    {
        $user = User::findOrFail($id); // Buscar usuário pelo ID
        return view('auth.view-profile', compact('user'));
    }

    // Atualizar o perfil do usuário logado
    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Obter o usuário autenticado

        // Validação dos dados de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'bio' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:15',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Atualizar os campos do usuário
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->phone = $request->phone;

        // Se uma nova foto for enviada, atualize o campo photo
        if ($request->hasFile('photo')) {
            // Salvar a nova foto
            $path = $request->file('photo')->store('photos', 'public');
            $user->photo = $path;
        }

        $user->Auth::save(); // Salvar as alterações

        return redirect()->route('profile')->with('success', 'Perfil atualizado com sucesso!');
    }
}
