<?php
include_once '../../config/conectar.php';

$id_cliente = $_POST['id_cliente'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cnh = $_POST['cnh'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "UPDATE cliente SET nome = :nome, data_nascimento = :data_nascimento, cnh = :cnh, endereco = :endereco, telefone = :telefone WHERE id_cliente = :id_cliente";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_cliente', $id_cliente);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':data_nascimento', $data_nascimento);
$stmt->bindValue(':cnh', $cnh);
$stmt->bindValue(':endereco', $endereco);
$stmt->bindValue(':telefone', $telefone);

if ($stmt->execute()) {
    echo "Cliente atualizado com sucesso!";
    header("Location: listar_clientes.php");
} else {
    echo "Erro ao atualizar cliente!";
}
?>
