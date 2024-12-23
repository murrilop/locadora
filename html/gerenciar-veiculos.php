<?php

    include("../config/conectar.php");

    $sql = "SELECT * from veiculo";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $veiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Veículos - LOVETEC</title>
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
                <a href="gerenciar-locacoes.php">Gerenciar Locações</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Gerenciar Veículos</h2>
        <a href="adicionarveiculo.php" class="add-button">Adicionar Novo Veículo</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Preço/Dia</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($veiculos as $veiculo): ?>
                    <tr>
                        <td><?php echo $veiculo['codigo_veiculo'] ?></td>
                        <td><?php echo $veiculo['nome_veiculo'] ?></td>
                        <td><?php echo $veiculo['modelo_veiculo'] ?></td>
                        <td><?php echo $veiculo['valor_diaria_veiculo'] ?></td>
                    
                        <td>
                            <a href="editar-veiculo.php?codigo_veiculo=<?php echo $veiculo['codigo_veiculo']; ?>"><button class="edit-button">Editar</button></a>
                            <a class="delete-button" href="../funcoes/veiculo/excluir_veiculo.php?codigo_veiculo=<?php echo $veiculo['codigo_veiculo']; ?>">Excluir</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
