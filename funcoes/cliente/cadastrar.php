<?php
include_once '../../config/conectar.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cnh = $_POST['cnh'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "E-mail já cadastrado!";
} else {
    
    $sql = "INSERT INTO cliente (nome, data_nascimento, cnh, endereco, telefone) 
                    VALUES (:nome, :data_nascimento, :cnh, :endereco, :telefone)";
    $stmt = $pdo->prepare($sql_cliente);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':data_nascimento', $data_nascimento);
    $stmt->bindValue(':cnh', $cnh);
    $stmt->bindValue(':endereco', $endereco);
    $stmt->bindValue(':telefone', $telefone);
    
    if ($stmt->execute()) {
        $id = $pdo->lastInsertId();
        
        $sql = "INSERT INTO usuario (id_cliente, email, senha, tipo) 
                        VALUES (:id_cliente, :email, :senha, 'cliente')";
        $stmt = $pdo->prepare($sql_usuario);
        $stmt->bindValue(':id_cliente', $id);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        if ($stmt_usuario->execute()) {
            echo "Cadastro realizado com sucesso prr!";
        } else {
            echo "Erro ao cadastrar usuário!";
        }
    } else {
        echo "Erro ao cadastrar cliente!";
    }
}
?>
