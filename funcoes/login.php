<?php
@session_start();
require_once("config/conectar.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->query("SELECT * from usuario where email = '$email' and senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
    $tipo = $total_reg[0]['tipo'];
    if($tipo == 'cliente')
        $_SESSION['id'] = $res[0]['id'];
        $_SESSION['nome'] = $res[0]['nome'];
        
        echo "<script>window.location='painel'</script>";
    }else{
    echo "<script>window.alert('Usuário ou senha incorretos.')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>