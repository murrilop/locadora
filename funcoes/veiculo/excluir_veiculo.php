<?php

include("../config/conectar.php");

$codigo_veiculo = $_GET['codigo_veiculo'];

$sql = "DELETE FROM veiculo where codigo_veiculo = :codigo_veiculo";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":codigo_veiculo", $codigo_veiculo);

if($stmt->execute()){
    echo "Veiculo deletado com sucesso";
    header("refresh: 2; url=../../html/gerenciar-veiculos.php");
}else{
    echo "Ocorreu algum erro";
}
?>