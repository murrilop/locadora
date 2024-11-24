<?php
include_once '../../config/conectar.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cnh = $_POST['cnh'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "E-mail já cadastrado!";
} else{
    
    $sql = "INSERT INTO cliente (nome_cliente, data_nascimento_cliente, numero_cnh_cliente) 
                    VALUES (:nome_cliente, :data_nascimento_cliente, :numero_cnh_cliente)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome_cliente', $nome);
    $stmt->bindParam(':data_nascimento_cliente', $data_nascimento);
    $stmt->bindParam(':numero_cnh_cliente', $cnh);
    
    if ($stmt->execute()) {
        $codigo_cliente = $pdo->lastInsertId();
        
        $sql = "INSERT INTO usuario (email, senha, tipo_usuario, codigo_cliente) 
                VALUES (:email, :senha, :tipo_usuario, :codigo_cliente)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindValue(':tipo_usuario', 'cliente');
        $stmt->bindParam(':codigo_cliente', $codigo_cliente);

        $stmt->execute();

        $sql_telefone = "INSERT INTO telefone (numero_telefone, codigo_cliente, codigo_locadora) VALUES (:numero_telefone, :codigo_cliente, :codigo_locadora)";
        $stmt = $pdo->prepare($sql_telefone);
        $stmt->bindParam(':numero_telefone', $telefone);
        $stmt->bindParam(':codigo_cliente', $codigo_cliente);
        $stmt->bindValue(':codigo_locadora', NULL);

        $stmt->execute();

        $sql_endereco = "INSERT INTO endereco (nome_endereco, codigo_cliente, codigo_locadora, tipo_endereco) values(:nome_endereco, :codigo_cliente, :codigo_locadora, :tipo_endereco)";
        $stmt = $pdo->prepare($sql_endereco);
        $stmt->bindParam(':nome_endereco', $endereco);
        $stmt->bindParam(':codigo_cliente', $codigo_cliente);
        $stmt->bindValue(':codigo_locadora', null, PDO::PARAM_NULL);
        $stmt->bindValue(':tipo_endereco', null, PDO::PARAM_NULL);

        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
            header("refresh: 4; url=../../html/index.php");
            exit();
        } else {
            echo "Erro ao cadastrar usuário!";
        }
    } else {
        echo "Erro ao cadastrar cliente!";
    }
}
?>
