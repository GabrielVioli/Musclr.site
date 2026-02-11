<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Bem-vindo</h1>
            <form method="post" action="{{ route('login') }}">
                @csrf
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="password" placeholder="Digite sua senha" required>

                <button type="submit">Entrar</button>
            </form>
            <p class="signup-link">Não tem uma conta? <a href="{{ route('cadastro.form') }}">Cadastre-se</a></p>
            <p style="margin-top: 10px;"><a href="{{ route('home') }}" style="text-decoration: none; color: #666; font-size: 0.8rem;">Voltar ao site</a></p>
        </div>
    </div>
</body>
</html>