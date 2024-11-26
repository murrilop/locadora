<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - LOVETEC</title>
    <link rel="stylesheet" href="../css/relatorios.css">
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

    <main class="relatorios">
        <h2>Relatórios de Locação</h2>

        <!-- Filtros -->
        <div class="filtros">
            <form action="#" method="GET">
                <label for="periodo">Período:</label>
                <input type="date" id="inicio" name="inicio"> 
                <span>até</span>
                <input type="date" id="fim" name="fim">

                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="todas">Todas</option>
                    <option value="compactos">Compactos</option>
                    <option value="suvs">SUVs</option>
                    <option value="utilitarios">Utilitários</option>
                </select>

                <button type="submit" class="filtrar-btn">Filtrar</button>
            </form>
        </div>

        <!-- Gráficos -->
        <section class="graficos">
            <div class="grafico-card">
                <h3>Receita por Categoria</h3>
                <canvas id="graficoReceita"></canvas>
            </div>
            <div class="grafico-card">
                <h3>Locações por Mês</h3>
                <canvas id="graficoLocacoes"></canvas>
            </div>
        </section>

        <!-- Tabela -->
        <section class="tabela-relatorios">
            <h3>Detalhes das Locações</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID Locação</th>
                        <th>Veículo</th>
                        <th>Cliente</th>
                        <th>Data Início</th>
                        <th>Data Fim</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Fiat Mobi</td>
                        <td>João Silva</td>
                        <td>01/11/2024</td>
                        <td>05/11/2024</td>
                        <td>R$600,00</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Volkswagen T-Cross</td>
                        <td>Maria Souza</td>
                        <td>02/11/2024</td>
                        <td>07/11/2024</td>
                        <td>R$750,00</td>
                    </tr>
                    <!-- Mais registros -->
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/relatorios.js"></script>
</body>
</html>
