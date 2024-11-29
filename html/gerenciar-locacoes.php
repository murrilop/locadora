<?php

    include("../config/conectar.php");
    include("../funcoes/locacao/listar_locacoes.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Locações - LOVETEC </title>
    <link rel="stylesheet" href="../css/gerenciar.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="/locadora/img/logo.jpg" alt="Logo LOVETEC">
                <h1>LOVETEC</h1>
            </div>
            <nav class="navbar">
                <a href="homeadm.php">Início</a>
                <a href="gerenciar-veiculos.php">Gerenciar Veículos</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Gerenciar Locações</h2>

        <table>
            <thead>
                <tr>
                    <th>ID Locação</th>
                    <th>Cliente</th>
                    <th>Veículo</th>
                    <th>Data Início</th>
                    <th>Data Fim</th>
                    <th>Preço Total</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados_locacoes as $locacao) { ?>
                <tr>
                    <td><?php echo $locacao['codigo_locacao']; ?></td>
                    <td><?php echo $locacao['nome_cliente']; ?></td>
                    <td><?php echo $locacao['nome_veiculo']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($locacao['data_inicial_locacao'])); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($locacao['data_final_locacao'])); ?></td>
                    <td>R$ <?php echo $locacao['valor_final_locacao'], 2, ',', '.'; ?></td>
                    <td></td> <!-- Status vazio -->
                    <td>
                        <a href="editar-locacao.php?codigo=<?php echo $locacao['codigo_locacao']; ?>">
                            <button class="edit-button">Editar</button>
                        </a>
                        <form method="POST" action="cancelar-locacao.php" style="display:inline;">
                            <input type="hidden" name="codigo_locacao" value="<?php echo $locacao['codigo_locacao']; ?>">
                            <button type="submit" class="delete-button">Cancelar</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>