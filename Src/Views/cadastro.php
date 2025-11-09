<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cadastro-container">
        <div class="cadastro-card">
            <h1>Cadastre-se</h1>
            <form method="POST" action="/Musclr.site/Public/index.php">
                <label for="nome">Nome</label>
                <input type="text" id="nome" placeholder="Digite seu nome" required>

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Digite seu email" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha" required>

                <label for="confirmar-senha">Confirmar Senha</label>
                <input type="password" id="confirmar-senha" placeholder="Confirme sua senha" required>

                <button type="submit">Cadastrar</button>
            </form>
            <p class="login-link">Já tem uma conta? <a href="login.html">Entre</a></p>
        </div>
    </div>
</body>
</html>
