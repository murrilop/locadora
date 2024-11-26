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
<<<<<<< HEAD
                <a href="/locadora/html/homeadm.html">Início</a>
                <a href="/locadora/html/gerenciar-locacoes.html">Gerenciar Locações</a>
=======
                <a href="homeadm.php">Início</a>
                <a href="gerenciar-locacoes.php">Gerenciar Locações</a>
>>>>>>> 11ce20e65f3f9bdd31673bba46f9a7681428f62a
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Gerenciar Veículos</h2>
        <button class="add-button">Adicionar Novo Veículo</button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Categoria</th>
                    <th>Preço/Dia</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fiat Mobi</td>
                    <td>Compacto</td>
                    <td>R$ 90,00</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Volkswagen T-Cross</td>
                    <td>SUV</td>
                    <td>R$ 150,00</td>
                    <td>
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Excluir</button>
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
