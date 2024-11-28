<?php
    include("../config/conectar.php");
    include("../funcoes/verificar_session_cliente.php");
    include("../funcoes/locacao/mostrar_locacao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Locação - LOVETEC</title>
    <link rel="stylesheet" href="../css/confirmar.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="../img/logo.jpg" alt="Logo LOVETEC">
                <h1>LOVETEC</h1>
            </div>
            <nav class="navbar">
                <a href="homeusuario.php">Voltar para o início</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Confirmação de Locação</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNH</th>
                    <th>Veículo Escolhido</th>
                    <th>Data de início</th>
                    <th>Data de término</th>
                    <th>Endereço da Locadora</th>
                    <th>Telefone da Locadora</th>
                    <th>Valor da locação</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($dados_locacoes as $locacao) {
        ?>
            <tr>
                <td><?php echo $locacao['nome_cliente']; ?></td>
                <td><?php echo $locacao['numero_cnh_cliente']; ?></td>
                <td><?php echo $locacao['nome_veiculo']; ?></td>
                <td><?php echo $locacao['data_inicial_locacao']; ?></td>
                <td><?php echo $locacao['data_final_locacao']; ?></td>
                <td><?php echo $locacao['nome_endereco']; ?></td>
                <td><?php echo $locacao['numero_telefone']; ?></td>
                <td><?php echo $locacao['valor_final_locacao']; ?></td>
            </tr>
        <?php
            }
        ?>
            </tbody>
        </table>
        <div class="actions">
            <a href="homeusuario.php" class="cta-button">Confirmar</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
