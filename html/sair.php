<?php 
    include_once('../config/conectar.php');
    include("../funcoes/verificar_session_cliente.php");
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
            <a href="<?php if($_SESSION['tipo_usuario'] == 'cliente'){
                echo "homeusuario.php";
            }else if($_SESSION['tipo_usuario'] == 'adm'){
                echo "homeadm.php";
            }else{
                echo "index.php";
            }
            ?>
            " class="btn-cancelar">Cancelar</a>
        </div>
    </div>

</body>
</html>
