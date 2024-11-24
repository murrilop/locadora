<?php

include("../config/conectar.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - LOVETEC</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>

    <!-- Container de Cadastro -->
    <div class="cadastro-container">
        <h1>Cadastre-se na Lovetec</h1>
        <form action="../funcoes/cliente/cadastrar.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Telefone (com DDD)" required>

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" required>

            <label for="cnh">Número da CNH</label>
            <input type="text" id="cnh" name="cnh" placeholder="Digite o número da sua CNH" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

            <label for="data-nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html>
