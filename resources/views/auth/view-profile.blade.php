@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Perfil de {{ $user->name }}</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Informações Pessoais</h5>
            <p><strong>E-mail:</strong> {{ $user->email }}</p>
            <p><strong>Biografia:</strong> {{ $user->bio ?? 'Não disponível' }}</p>
            <p><strong>Telefone:</strong> {{ $user->phone ?? 'Não disponível' }}</p>
            <img src="{{ $user->getPhotoUrlAttribute() }}" alt="Foto de Perfil" class="img-fluid rounded-circle" width="150">
        </div>
    </div>
</div>
@endsection
