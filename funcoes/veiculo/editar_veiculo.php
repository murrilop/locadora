<?php

    include("../../config/conectar.php");

    $codigo_veiculo = $_POST['codigo_veiculo'];
    $nome_veiculo = $_POST['nome_veiculo'];
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $placa = $_POST['placa'];
    $fabricacao = $_POST['ano'];

    $sql = "UPDATE veiculo set nome_veiculo = :nome_veiculo,
    placa_veiculo = :placa_veiculo,
    valor_diaria_veiculo = :valor_diaria_veiculo,
    ano_fabricacao_veiculo = :ano_fabricacao_veiculo,
    modelo_veiculo = :modelo_veiculo,
    categoria = :categoria where codigo_veiculo = :codigo_veiculo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":nome_veiculo", $nome_veiculo);
    $stmt->bindParam(":placa_veiculo", $placa);
    $stmt->bindParam(":valor_diaria_veiculo", $preco);
    $stmt->bindParam(":ano_fabricacao_veiculo", $fabricacao);
    $stmt->bindParam(":modelo_veiculo", $modelo);
    $stmt->bindParam(":categoria", $categoria);
    $stmt->bindParam(":codigo_veiculo", $codigo_veiculo);

    if($stmt->execute()){
        echo "Veiculo editado com sucesso";
        header("refresh: 3; url=../../html/gerenciar-veiculos.php");
    }else{
        echo "Falha ao editar o veiculo";
    }


?>