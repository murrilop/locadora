<?php
include_once("../../config/conectar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    try {
        // Inserindo dados na tabela locadoras
        $stmt = $conn->prepare("INSERT INTO locadoras (nome, cnpj, endereco, telefone) 
                                VALUES (:nome, :cnpj, :endereco, :telefone)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();

        echo "Locadora cadastrada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao cadastrar locadora: " . $e->getMessage();
    }
}
?>
