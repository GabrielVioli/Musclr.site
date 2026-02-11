<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Cadastre-se</h1>
            <form method="POST" action="{{ route('cadastro') }}">
                @csrf
                
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="name" placeholder="Seu nome completo" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Seu melhor email" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="password" placeholder="Crie uma senha" required>

                <label for="confirma_senha">Confirmar Senha</label>
                <input type="password" id="confirma_senha" name="confirmed_password" placeholder="Repita a senha" required>

                <button type="submit">Cadastrar</button>
            </form>
            <p class="login-link">Já tem uma conta? <a href="{{ route('login') }}">Entre</a></p>
            <p style="margin-top: 10px;"><a href="{{ route('home') }}" style="text-decoration: none; color: #666; font-size: 0.8rem;">Voltar ao site</a></p>
        </div>
    </div>
</body>
</html>