@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Meu Perfil</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Biografia</label>
            <textarea name="bio" id="bio" class="form-control">{{ $user->bio }}</textarea>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}">
        </div>
        <div class="form-group">
            <label for="photo">Foto de Perfil</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
    </form>
</div>
@endsection
