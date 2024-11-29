<?php

    include("../config/conectar.php");
    include("../funcoes/verificar_session.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - LOVETEC</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <header>
        <div class="header-content">
            <!-- Logo -->
            <div class="logo">
                <img src="/locadora/img/logo.jpg" alt="Logo LOVETEC">
                <h1>LOVETEC</h1>
            </div>
            
            <!-- Navbar -->
            <nav class="navbar">
                <a href="escolhaveiculo.php"> Escolha seu veiculo</a>
                <a href="resumolocacao.php">Histórico de Locações</a>
                <a href="sair.php">Sair</a>
            </nav>
        </div>
    </header>
    
    <section class="banner">
        <div class="banner-text">
            <h2>Alugue um Carro Agora!</h2>
            <p>Temos a frota ideal para você, desde carros compactos até SUVs e utilitários.</p>
            <a href="locacao.php" class="cta-button">Faça sua locação</a>
        </div>
    </section>

    
    <section class="frota">
        <h2>Nosso Catálogo de Veículos</h2>
        <div class="veiculos">
            <div class="veiculo">
                <img src="/locadora/img/compacto-kwid.jpg" alt="Carro Compacto">
                <h3>Carros Compactos</h3>
                <p>Aproveite nossos carros econômicos com ótima performance e baixo custo.</p>
            </div>
            <div class="veiculo">
                <img src="/locadora/img/suvimg.jpg" alt="SUV">
                <h3>SUVs</h3>
                <p>Para quem busca conforto, espaço e alta performance. Ideal para viagens longas.</p>
            </div>
            <div class="veiculo">
                <img src="/locadora/img/utilitarioimg.jpg" alt="Utilitário">
                <h3>Utilitários</h3>
                <p>Alugue um utilitário para suas necessidades comerciais ou mudanças.</p>
            </div>
        </div>
    </section>

    
    <section class="promocoes">
        <h2>Ofertas e Promoções</h2>
        <div class="promocao-item">
            <h3>Desconto de 10% na primeira locação</h3>
            <p>Alugue seu carro com 10% de desconto na sua primeira locação! Aproveite!</p>
        </div>
        <div class="promocao-item">
            <h3>Férias no Paraíso: Pacote Especial</h3>
            <p>Pacote promocional para aluguel de SUV para viagens familiares.</p>
        </div>
    </section>

    
    <section class="como-funciona">
        <h2>Como Funciona?</h2>
        <div class="etapas">
            <div class="etapa">
                <h3>1. Escolha seu veículo</h3>
                <p>Selecione o carro que melhor atende às suas necessidades.</p>
            </div>
            <div class="etapa">
                <h3>2. Faça a Reserva</h3>
                <p>Escolha o período de locação e faça a reserva online.</p>
            </div>
            <div class="etapa">
                <h3>3. Pegue as Chaves</h3>
                <p>Retire o veículo em uma de nossas lojas ou pontos de coleta.</p>
            </div>
        </div>
    </section>

    
    <section class="contato">
        <h2>Fale Conosco</h2>
        <p>Tem alguma dúvida ou precisa de ajuda? Entre em contato com a gente!</p>
        <ul>
            <li><strong>Email:</strong> contato@lovetec.com.br</li>
            <li><strong>Telefone:</strong> (11) 1234-5678</li>
            <li><strong>Endereço:</strong> Rua Exemplo, 123 - São Paulo, SP</li>
        </ul>
        
    </section>

    
    <footer>
        <p>&copy; 2024 LOVETEC - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
