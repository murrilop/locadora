<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Conseguir código do cliente
    $sql = "SELECT codigo_cliente FROM usuario WHERE codigo_usuario = :codigo_usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_usuario", $_SESSION['codigo_usuario']);
    $stmt->execute();
    $codigo_cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    // Conseguir nome e cnh do cliente
    $sql = "SELECT nome_cliente, numero_cnh_cliente FROM cliente WHERE codigo_cliente = :codigo_cliente";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_cliente", $codigo_cliente['codigo_cliente']);
    $stmt->execute();
    $info_cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    // Conseguir informações das locações (todas as locações do cliente)
    $sql = "SELECT * FROM locacao WHERE codigo_cliente = :codigo_cliente";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":codigo_cliente", $codigo_cliente['codigo_cliente']);
    $stmt->execute();
    $locacoes = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    $dados_locacoes = [];

    foreach ($locacoes as $locacao) {
        // Conseguir o veiculo da locação
        $sql = "SELECT nome_veiculo FROM veiculo WHERE codigo_veiculo = :codigo_veiculo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":codigo_veiculo", $locacao['codigo_veiculo']);
        $stmt->execute();
        $veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

        if($veiculo == NULL){
            $veiculo['nome_veiculo'] = "Veiculo indisponivel";
        }


        // Conseguir dados da locadora
        $sql = "SELECT * FROM locadora WHERE codigo_locadora = :codigo_locadora";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":codigo_locadora", $locacao['codigo_locadora']);
        $stmt->execute();
        $locadora = $stmt->fetch(PDO::FETCH_ASSOC);

        // Conseguir endereço da locadora
        $sql = "SELECT endereco_locadora FROM locadora";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $endereco_locadora = $stmt->fetch(PDO::FETCH_ASSOC);

        // Conseguir telefone da locadora
        $sql = "SELECT numero_telefone FROM telefone WHERE codigo_locadora IS NOT NULL;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $telefone_locadora = $stmt->fetch(PDO::FETCH_ASSOC);

        $dados_locacoes[] = [
            'codigo_cliente' => $codigo_cliente['codigo_cliente'],
            'nome_cliente' => $info_cliente['nome_cliente'],
            'numero_cnh_cliente' => $info_cliente['numero_cnh_cliente'],
            'nome_veiculo' => $veiculo['nome_veiculo'],
            'data_inicial_locacao' => $locacao['data_inicial_locacao'],
            'data_final_locacao' => $locacao['data_final_locacao'],
            'nome_endereco' => $endereco_locadora['endereco_locadora'],
            'numero_telefone' => $telefone_locadora['numero_telefone'],
            'valor_final_locacao' => $locacao['valor_final_locacao']
        ];
    }
?>
