@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Perfis de Usuários</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('profile.view', $user->id) }}" class="btn btn-info">Ver Perfil</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
