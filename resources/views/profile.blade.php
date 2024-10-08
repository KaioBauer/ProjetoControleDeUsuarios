<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Perfil</h2>
        <form>
            <label for="name">Nome:</label>
            <input type="text" name="name" value="Nome do Usuário" required>
            <label for="email">Email:</label>
            <input type="email" name="email" value="email@example.com" required>
            <button type="submit">Atualizar</button>
        </form>
        <form>
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>
