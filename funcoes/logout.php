<?php
session_start();
$tipo_usuario = $_SESSION['tipo_usuario'];
session_destroy();

if($tipo_usuario == 'cliente'){
    
}

header("location: ../html/index.php");
exit();
?>