<?php
include_once("../../config/conectar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $cliente_id = $_POST['cliente_id'];
    $veiculo_id = $_POST['veiculo_id'];
    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];
    $valor_diaria = $_POST['valor_diaria'];

    // Calculando o valor total da locação
    $dias = (strtotime($data_final) - strtotime($data_inicial)) / (60 * 60 * 24);
    $valor_total = $dias * $valor_diaria;

    try {
        // Inserindo dados na tabela locacoes
        $stmt = $conn->prepare("INSERT INTO locacoes (cliente_id, veiculo_id, data_inicial, data_final, valor_diaria, valor_total) 
                                VALUES (:cliente_id, :veiculo_id, :data_inicial, :data_final, :valor_diaria, :valor_total)");
        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->bindParam(':veiculo_id', $veiculo_id);
        $stmt->bindParam(':data_inicial', $data_inicial);
        $stmt->bindParam(':data_final', $data_final);
        $stmt->bindParam(':valor_diaria', $valor_diaria);
        $stmt->bindParam(':valor_total', $valor_total);
        $stmt->execute();

        echo "Locação cadastrada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao cadastrar locação: " . $e->getMessage();
    }
}
?>
