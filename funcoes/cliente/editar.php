<?php
include_once '../../config/conectar.php';

$id_cliente = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente" ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_cliente', $id_cliente);
$stmt->execute();
$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$cliente) {
    die("Mano talvez o cara nem exista!");
}
?>