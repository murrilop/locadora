<?php
include_once("../../config/conectar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST['nome'];
    $placa = $_POST['placa'];
    $valor_diaria = $_POST['valor_diaria'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $cor = $_POST['cor'];
    $modelo = $_POST['modelo'];

    try {
        // Inserindo dados na tabela veiculos
        $stmt = $conn->prepare("INSERT INTO veiculos (nome, placa, valor_diaria, ano_fabricacao, cor, modelo) 
                                VALUES (:nome, :placa, :valor_diaria, :ano_fabricacao, :cor, :modelo)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':placa', $placa);
        $stmt->bindParam(':valor_diaria', $valor_diaria);
        $stmt->bindParam(':ano_fabricacao', $ano_fabricacao);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->execute();

        echo "Veículo cadastrado com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao cadastrar veículo: " . $e->getMessage();
    }
}
?>
