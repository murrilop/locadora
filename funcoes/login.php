<?php

@session_start();
require_once("../config/conectar.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);
if($total_reg > 0){
    $tipo_usuario = $res[0]['tipo_usuario'];
    if($tipo_usuario == 'cliente'){
        
        $_SESSION['codigo_usuario'] = $res[0]['codigo_usuario'];
        $_SESSION['email'] = $res[0]['email'];
        $_SESSION['tipo_usuario'] = $res[0]['tipo_usuario'];

        $sql = "SELECT * from cliente where codigo_cliente = :codigo_cliente";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":codigo_cliente", $res[0]['codigo_usuario']);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['nome'] = $res[0]['nome_cliente'];
        
        header("location: ../html/homeusuario.php");

        } else if ($tipo_usuario == 'adm') {
            $_SESSION['codigo_usuario'] = $res[0]['codigo_usuario'];
            $_SESSION['email'] = $res[0]['email'];
            $_SESSION['tipo_usuario'] = $res[0]['tipo_usuario'];
            header("location: ../html/homeadm.php");
    } else {
        echo "<script>window.alert('Tipo de usuário inválido.')</script>";
        header("refresh: 2; url=../html/index.php");
    }
} else {
    echo "<script>window.alert('Usuário ou senha incorretos.')</script>";
    header("refresh: 2; url=../html/index.php");
}
?>