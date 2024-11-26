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
                <tr>
                    <td>101</td>
                    <td>João Silva</td>
                    <td>Fiat Mobi</td>
                    <td>01/11/2024</td>
                    <td>07/11/2024</td>
                    <td>R$ 630,00</td>
                    <td>Ativa</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Maria Oliveira</td>
                    <td>Volkswagen T-Cross</td>
                    <td>15/10/2024</td>
                    <td>22/10/2024</td>
                    <td>R$ 1.050,00</td>
                    <td>Concluída</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Cancelar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
