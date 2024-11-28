<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    //Conseguir nome e cnh do cliente
    $sql = "SELECT codigo_cliente from usuario where codigo_usuario = :codigo_usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_usuario", $_SESSION['codigo_usuario']);
    $stmt->execute();
    $codigo_cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT nome_cliente, numero_cnh_cliente from cliente where codigo_cliente = :codigo_cliente";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_cliente", $codigo_cliente['codigo_cliente']);
    $stmt->execute();
    $info_cliente = $stmt->fetch(PDO::FETCH_ASSOC);


    //Conseguir informações da locação
    $sql = "SELECT * from locacao where codigo_cliente = :codigo_cliente";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_cliente", $codigo_cliente['codigo_cliente']);
    $stmt->execute();
    $info_locacao = $stmt->fetch(PDO::FETCH_ASSOC);

    //Conseguir o veiculo da locacao
    $sql = "SELECT nome_veiculo from veiculo where codigo_veiculo = :codigo_veiculo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_veiculo", $info_locacao['codigo_veiculo']);
    $stmt->execute();
    $veiculo = $stmt->fetch(PDO::FETCH_ASSOC);


    //Conseguir endereco e telefone da locadora
    $sql = "SELECT * from locadora";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $locadora = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT nome_endereco from endereco where codigo_locadora = :codigo_locadora";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_locadora", $locadora['codigo_locadora']);
    $stmt->execute();
    $endereco_locadora = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT numero_telefone from telefone where codigo_locadora = :codigo_locadora";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_locadora", $locadora['codigo_locadora']);
    $stmt->execute();
    $telefone_locadora = $stmt->fetch(PDO::FETCH_ASSOC);
?>