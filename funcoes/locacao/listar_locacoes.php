<?php
include("../config/conectar.php");
include("../funcoes/verificar_session.php");

// Consultar as locações (substituir pelo código otimizado mencionado)
$sql = "
    SELECT 
        l.codigo_locacao,
        c.nome_cliente,
        v.nome_veiculo,
        l.data_inicial_locacao,
        l.data_final_locacao,
        l.valor_final_locacao
    FROM locacao l
    INNER JOIN cliente c ON l.codigo_cliente = c.codigo_cliente
    INNER JOIN veiculo v ON l.codigo_veiculo = v.codigo_veiculo
    WHERE c.codigo_cliente = (
        SELECT codigo_cliente FROM usuario WHERE codigo_usuario = :codigo_usuario
    )
";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":codigo_usuario", $_SESSION['codigo_usuario']);
$stmt->execute();
$dados_locacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>