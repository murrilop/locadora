<?php
session_start();

if (!isset($_SESSION['codigo_usuario']) or !isset($_SESSION['email'])) {
    header("location:../html/index.php");
    exit;
    
}elseif ($_SESSION['tipo_usuario'] != 'adm' && $_SESSION['tipo_usuario'] != 'cliente') {
    session_destroy();
    header("location:../html/index.php");
    exit;
}