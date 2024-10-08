<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Registrar</h2>
        <form>
            <label for="name">Nome:</label>
            <input type="text" name="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <label for="password_confirmation">Confirme a senha:</label>
            <input type="password" name="password_confirmation" required>
            <button type="submit">Registrar</button>
        </form>
        <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
    </div>
</body>
</html>
