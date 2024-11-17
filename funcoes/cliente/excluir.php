<?php
include_once 'conectar.php';

$id_cliente = $_GET['id'];

$sql = "DELETE FROM cliente where id_cliente = :id_cliente";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_cliente', $id_cliente);

if ($stmt->execute()) {
    echo "<h2>Cliente excluído com sucesso</h2>";
    header("Location: listar_clientes.php");
} else {
    echo "Erro ao tentar excluir cliente!";
}
?>
