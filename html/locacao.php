<?php

    include("../config/conectar.php");
    include("../funcoes/verificar_session_cliente.php");

    $sql = "SELECT * FROM veiculo";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça sua Locação - LOVETEC</title>
    <link rel="stylesheet" href="../css/locacao.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="/locadora/img/logo.jpg" alt="Logo LOVETEC">
                <h1>LOVETEC</h1>
            </div>
            <nav class="navbar">
                <a href="../html/homeusuario.html">Voltar</a>
                <a href="/locadora/html/resumolocacao.html">Histórico de Locações</a>
                <a href="/locadora/html/sair.html">Sair</a>
            </nav>
        </div>
    </header>

    <section class="locacao">
        <div class="locacao-container">
            <h2>Faça sua Locação</h2>
            <form class="locacao-form" action="../funcoes/locacao/nova_locacao.php" METHOD="POST">
                <div class="form-group">
                    <label for="veiculo">Escolha o Veículo</label>

                    <?php if(count($res) > 0): ?>
                        <select name="veiculo" id="veiculo" required>
                            <?php foreach($res as $veiculo): ?>
                                <option value="<?php echo $veiculo['codigo_veiculo']; ?>"><?php echo $veiculo['nome_veiculo']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php endif; ?>

                    <!-- <select id="veiculo" name="veiculo" required>
                        <option value="mobi">Fiat Mobi</option>
                        <option value="uno">Fiat Uno</option>
                        <option value="kwid">Renault Kwid</option>
                        <option value="tcross">Volkswagen T-Cross</option>
                        <option value="creta">Hyundai Creta</option>
                        <option value="tracker">Chevrolet Tracker</option>
                        <option value="doblo">Fiat Doblo</option>
                        <option value="hr">Hyundai HR</option>

                    </select> -->
                </div>
                <div class="form-group">
                    <label for="data-inicio">Data de Início</label>
                    <input type="date" id="data-inicio" name="data_inicio" required>
                </div>
                <div class="form-group">
                    <label for="data-fim">Data de Término</label>
                    <input type="date" id="data-fim" name="data_fim" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="cta-button">Confirmar Locação</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
