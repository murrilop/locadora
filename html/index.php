<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LOVETEC</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <div class="login-container">
        <h1>Bem-vindo à Lovetec!</h1>
        <form action="../funcoes/login.php" method="post">
            <label for="username">Usuário</label>
            <input type="text" id="email" name="email" placeholder="Digite seu email" required>

            <label for="password">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <button type="submit">Entrar</button>
        </form>

        <p>Não tem uma conta? <a href="/locadora/html/cadastro.html">Cadastre-se</a></p>
    </div>

</body>
</html>
