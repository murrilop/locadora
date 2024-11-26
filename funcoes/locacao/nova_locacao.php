<?php

session_start();
include("../../config/conectar.php");

$veiculo = $_POST['veiculo'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$codigo_usuario = $_SESSION['codigo_usuario'];

// Pegar o valor da diaria do veiculo
$sql = "SELECT valor_diaria_veiculo from veiculo where codigo_veiculo = :codigo_veiculo";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":codigo_veiculo", $veiculo);
$stmt->execute();
$valor_diaria_veiculo = $stmt->fetch(PDO::FETCH_ASSOC);


//Conseguir o valor total da locacao
$dias = (strtotime($data_fim) - strtotime($data_inicio)) / (60 * 60 * 24);
$valor_final_locacao = $dias * $valor_diaria_veiculo['valor_diaria_veiculo'];


//Conseguir codigo do cliente
$sql = "SELECT codigo_cliente from usuario where codigo_usuario = :codigo_usuario";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":codigo_usuario", $codigo_usuario);
$stmt->execute();
$codigo_cliente = $stmt->fetch(PDO::FETCH_ASSOC)['codigo_cliente'];


// Conseguir nome do cliente
// $sql = "SELECT nome_cliente from cliente where codigo_cliente = :codigo_cliente";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(":codigo_cliente", $codigo_cliente);
// $stmt->execute();
// $nome_cliente = $stmt;


// Cadastrar nova locação

$sql = "INSERT INTO locacao (data_inicial_locacao, data_final_locacao, valor_final_locacao, codigo_cliente, codigo_veiculo) values(:data_inicial_locacao, :data_final_locacao, :valor_final_locacao, :codigo_cliente, :codigo_veiculo)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":data_inicial_locacao", $data_inicio);
$stmt->bindParam(":data_final_locacao", $data_fim);
$stmt->bindParam(":valor_final_locacao", $valor_final_locacao);
$stmt->bindParam(":codigo_cliente", $codigo_cliente);
$stmt->bindParam(":codigo_veiculo", $veiculo);

if($stmt->execute()){
    echo "Locação feita com sucesso";
    header("refresh: 4; url=../../html/resumolocacao.php");
}else{
    echo "Ocorreu um erro ao tentar fazer a locação, por favor verificar.";
    header("refresh: 4; url=../../html/locacao.php");
}