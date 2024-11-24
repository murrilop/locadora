<?php
session_start();
if (!isset($_SESSION)) {
}

if (!isset($_SESSION['codigo_usuario']) and !isset($_SESSION['email'])) {
    header("location:../html/index.php");
    exit;
    
}elseif ($_SESSION['tipo_usuario'] != 'adm') {
    session_destroy();
    header("location:../html/index.php");
    exit;
}