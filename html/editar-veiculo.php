<?php

    include("../config/conectar.php");

    $codigo_veiculo = $_GET['codigo_veiculo'];

    $sql = "SELECT * FROM veiculo where codigo_veiculo = :codigo_veiculo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_veiculo", $codigo_veiculo);
    $stmt->execute();
    $veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veículo - LOVETEC</title>
    <link rel="stylesheet" href="../css/editar.css">
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
                <a href="gerenciar-veiculos.php">Gerenciar Veículos</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Editar Veículo</h2>
        
        <form action="../funcoes/veiculo/editar_veiculo.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="modelo">Nome do veículo</label>
                <input type="text" id="nome do veiculo" name="nome_veiculo" value="<?php echo $veiculo['nome_veiculo']; ?>" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" id="modelo" name="modelo" value="<?php echo $veiculo['modelo_veiculo']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" required>
                    <option value="compacto" selected>Compacto</option>
                    <option value="suv">SUV</option>
                    <option value="sedan">Utilitário</option>
                </select>
            </div>

            <div class="form-group">
                <label for="preco">Preço/Dia</label>
                <input type="number" id="preco" name="preco" step="0.01" value="<?php echo $veiculo['valor_diaria_veiculo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" id="placa" name="placa" maxlength="7" required placeholder="ABC1234" value="<?php echo $veiculo['placa_veiculo']; ?>" >
            </div>

            <div class="form-group">
                <label for="ano">Ano de Fabricação</label>
                <input type="number" id="ano" name="ano" min="1900" max="2024" value="<?php echo $veiculo['ano_fabricacao_veiculo']; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="imagem" class="file-label">Alterar Imagem</label>
                <input type="file" id="imagem" name="imagem" accept="image/*">
                <!-- <p class="file-hint">Nenhum arquivo selecionado</p> -->
            </div>

            <input type="hidden" name="codigo_veiculo" value="<?php echo $codigo_veiculo; ?>" >

            <div class="form-actions">
                <button type="submit" class="save-button">Salvar</button>
                <a href="gerenciar-veiculos.php" class="cancel-button">Cancelar</a>
            </div>
        </form>
    </main>

    <footer>