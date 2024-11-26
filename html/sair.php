<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Logout - LOVETEC</title>
    <link rel="stylesheet" href="../css/sair.css">
</head>
<body>

    <div class="logout-container">
        <h2>Você tem certeza que deseja sair?</h2>
        <p>Ao sair, você será desconectado de sua conta.</p>

        <div class="logout-buttons">
            <a href="../funcoes/logout.php" class="btn-sair">Sim, Sair</a>
<<<<<<< HEAD
            <a href="<?php if($_SESSION['tipo_usuario'] == 'cliente'){
                echo "homeusuario.php";
            }else if($_SESSION['tipo_usuario'] == 'adm'){
                echo "homeadm.php";
            }else{
                echo "index.php";
            }
            ?>
            " class="btn-cancelar">Cancelar</a>
=======
            <a href="homeadm.php" class="btn-cancelar">Cancelar</a>
>>>>>>> 11ce20e65f3f9bdd31673bba46f9a7681428f62a
        </div>
    </div>

</body>
</html>
