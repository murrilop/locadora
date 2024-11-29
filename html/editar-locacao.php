<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Locação - LOVETEC</title>
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
                <a href="gerenciar-veiculos.php">Gerenciar Veículos</a>
                <a href="gerenciar-locacoes.php">Gerenciar Locações</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Editar Locação</h2>

        <form action="editar-locacao.php" method="POST">
            <div class="form-group">
                <label for="id-locacao">ID da Locação</label>
                <input type="text" id="id-locacao" name="id-locacao" value="101" readonly>
            </div>

            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" id="cliente" name="cliente" value="João Silva" required>
            </div>

            <div class="form-group">
                <label for="veiculo">Veículo</label>
                <select id="veiculo" name="veiculo" required>
                    <option value="fiat-mobi" selected>Fiat Mobi</option>
                    <option value="toyota-corolla">Toyota Corolla</option>
                    <option value="chevrolet-onix">Chevrolet Onix</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data-inicio">Data de Início</label>
                <input type="date" id="data-inicio" name="data-inicio" value="2024-11-01" required>
            </div>

            <div class="form-group">
                <label for="data-fim">Data de Fim</label>
                <input type="date" id="data-fim" name="data-fim" value="2024-11-07" required>
            </div>

            <div class="form-group">
                <label for="preco-total">Preço Total (R$)</label>
                <input type="number" id="preco-total" name="preco-total" step="0.01" value="630.00" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="ativa" selected>Ativa</option>
                    <option value="finalizada">Finalizada</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="save-button">Salvar</button>
                <a href="gerenciar-locacoes.php" class="cancel-button">Cancelar</a>
            </div>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>