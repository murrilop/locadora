<?php

    include("../../config/conectar.php");

    $nome_veiculo = $_POST['nome_veiculo'];
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $placa = $_POST['placa'];
    $ano = $_POST['ano'];
    $cor = "Branco";

    $sql = "INSERT INTO veiculo (nome_veiculo, placa_veiculo, valor_diaria_veiculo, ano_fabricacao_veiculo, cor_veiculo, modelo_veiculo, categoria) values(:nome_veiculo, :placa_veiculo, :valor_diaria_veiculo, :ano_fabricacao_veiculo, :cor_veiculo, :modelo_veiculo, :categoria)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":nome_veiculo", $nome_veiculo);
    $stmt->bindParam(":placa_veiculo", $placa);
    $stmt->bindParam(":valor_diaria_veiculo", $preco);
    $stmt->bindParam(":ano_fabricacao_veiculo", $ano);
    $stmt->bindValue(":cor_veiculo", $cor);
    $stmt->bindValue(":modelo_veiculo", $modelo);
    $stmt->bindValue(":categoria", $categoria);

    if($stmt->execute()){
        echo "Veiculo adicionado com sucesso";
        header("refresh: 3; url=../../html/gerenciar-veiculos.php");
    }else{
        echo "Falha ao adicionar o veiculo";
    }

?>