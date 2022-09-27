<?php
@include 'conectar_login'; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, Chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pacotes</title>

    <!-- swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>



    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


    <!-- Fronte do site em css -->
    <link rel="stylesheet" href="css/style.css">

    </head>
<body>

<!-- inicio do header(cabeçalho) Usando uma classe Header para criar os Objetos do cabeçalho-->
<section class="header">

    <a href="home.php" class="logo">TOP Service Seguros</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="orçamentos.php">Fazer Orçamento</a>
        <a href="contrato.php">Status do Contrato</a>
        <a href="boletos.php">Visualizar Boleto</a>
        <a href="serviços.php">Solicitar Serviços</a>
        <a href="login.php" class="gout">Logout</a>
    </nav>
 
<div id="menu-btn" class="fas fa-bars"></div>
<!--leva o menu-btn para o js-->  

</section>
<!-- fim do header-->

<div class="heading" style="background:url(image/fundojeep.jpg) no-repeat">
    <h1>Pacotes e Orçamentos</h1>
</div>

<section class="sobre-serviços">

    <div class="content">
        <h3>Serviços Disponíveis</h3>
        <p>- Cobertura de Roubo e Furto.</p>
        <p>- Cobertura de Danos Naturais.</p>
        <p>- Guincho acima de 100km.</p>
        <p>- Veículo utilizado por motoristas de 18 à 25 anos.</p>
        <p>- Veículo não possui garagem.</p>
        <p>- Veículo utilizado para deslocamento serviço e(ou)faculdade.</p>
        <p>- Cobertura de danos em vidros, portas, pneus, parte elétrica e Mecânica, chaves.</p>
    
        <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Valor Total Anual</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Valor Total Mensal</span>
                </div>
        </div>
    </div>

</section>


<!--Incio CRUD-->
<section class="Cadastro">
    <h2 class="heading-title">Cadastro: Proprietário e Veículo</h1>
    <form action="conectar.php" method="post" class="crud-form">
        <div class="flex">
            <div class="inputox">
                <span>Nome Completo :</span>
                <input type="text" placeholder="Insira Nome Completo" name="nome">
            </div>
            <div class="inputox">
                <span>Documento :</span>
                <input type="text" placeholder="Insira o CPF, RG ou CNH" name="doc">
            </div>
            <div class="inputox">
                <span>Email :</span>
                <input type="text" placeholder="Insira seu e-mail" name="email">
            </div>
            <div class="inputox">
                <span>Endereço :</span>
                <input type="text" placeholder="Insira seu endereço" name="endereço">
            </div>
            <div class="inputox">
                <span>Modelo :</span>
                <input type="text" placeholder="Insira o modelo" name="modelo">
            </div>
            <div class="inputox">
                <span>Valor tabela FIP :</span>
                <input type="number" placeholder="Insira o valor" name="valorfip">
            </div>
            <div class="inputox">
                <span>Marca :</span>
                <input type="text" placeholder="Insira marca" name="marca">
            </div>
            <div class="inputox">
                <span>Combustivel :</span>
                <input type="text" placeholder="Insira o tipo combustivel" name="combustível">
            </div>
            <div class="inputox">
                <span>Ano de fabricação :</span>
                <input type="date" name="ano">
            </div>
            <div class="inputox">
                <span>Placa :</span>
                <input type="text" placeholder="Insira a Placa" name="placa">
            </div>
            <div class="inputox">
                <span>Renavam :</span>
                <input type="text" placeholder="Insira o renavam" name="renavam">
            </div>
        </div>


        <input type="submit" value="Cadastrar" class="btn" name="send">

    </form>

</section>
<!--Fim CRUD-->





<!--Rodape inicio-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Links Rápidos</h3>
            <a href="home.php"> <i class="fas fa-angle-ri"></i> Home</a>
            <a href="orçamentos.php"> <i class="fas fa-angle-ri"></i> Fazer Orçamento</a>
            <a href="contrato.php"> <i class="fas fa-angle-ri"></i> Status do Contrato</a>
            <a href="boletos.php"> <i class="fas fa-angle-ri"></i> Visualizar Boleto</a>
            <a href="serviços.php"> <i class="fas fa-angle-ri"></i> Solicitar Serviços</a>
        </div>

        <div class="box">
            <h3>Links Extras</h3>
            <a href="#"> <i class="fas fa-angle-ri"></i> Faça uma Pergunta</a>
            <a href="#"> <i class="fas fa-angle-ri"></i> Sobre Nós</a>
            <a href="#"> <i class="fas fa-angle-ri"></i> Nossa Politica</a>
            <a href="#"> <i class="fas fa-angle-ri"></i> Termos de Uso</a>
        </div>

        <div class="box">
            <h3>Links Contato</h3>
            <a href="#"> <i class="fas fa-phone"></i> (12) 981424113</a>
            <a href="#"> <i class="fas fa-envelope"></i> topsegurosservice@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Av Tancredo Neves. Jd Americano Noza Leste Sjc. </a>
        </div>

        <div class="box">
            <h3>Seguia nossas Redes</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>  Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>  Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>  Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>  Linkedin</a>
        </div>

    </div>

    <div class="credit"> criado por <span> Top Service Seguros</span> | Todos Direitos Reservados! </div>


</section>

<!--Rodape fim-->





    <!-- swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Customização do Js -->
    <script src="js/script.js"></script>

</body>
</html>


