<?php
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        
        $sql_cliente = "INSERT INTO cliente (nome, data_nascimento, cnh, endereco, telefone) 
                        VALUES (:nome, :data_nascimento, :cnh, :endereco, :telefone)";
        $stmt_cliente = $pdo->prepare($sql_cliente);
        $stmt_cliente->bindValue(':nome', $nome);
        $stmt_cliente->bindValue(':data_nascimento', $data_nascimento);
        $stmt_cliente->bindValue(':cnh', $cnh);
        $stmt_cliente->bindValue(':endereco', $endereco);
        $stmt_cliente->bindValue(':telefone', $telefone);
        
        if ($stmt_cliente->execute()) {
            $id = $pdo->lastInsertId();
            
            $sql_usuario = "INSERT INTO usuario (id_cliente, email, senha, tipo) 
                            VALUES (:id_cliente, :email, :senha, 'cliente')";
            $stmt_usuario = $pdo->prepare($sql_usuario);
            $stmt_usuario->bindValue(':id_cliente', $id);
            $stmt_usuario->bindValue(':email', $email);
            $stmt_usuario->bindValue(':senha', $senha);

            if ($stmt_usuario->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar usuário!";
            }
        } else {
            echo "Erro ao cadastrar cliente!";
        }
    }
}
?>
