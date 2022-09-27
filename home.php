<?php
@include 'conectar.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

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
        <a href="login.php">Fazer Orçamento</a>
        <a href="contrato.php">Status do Contrato</a>
        <a href="boletos.php">Visualizar Boleto</a>
        <a href="serviços.php">Solicitar Serviços</a>
    </nav>
 
<div id="menu-btn" class="fas fa-bars"></div>
<!--leva o menu-btn para o js-->  

</section>
<!-- fim do header-->


<!--Start do Home  (usando swiper no slide-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(image/slide-moto.jpg) no-repeat">
                    <div class="content">
                        <span> Explore, saiba mais</span>
                        <h3>Seguros para Motos</h3>
                        <a href="serviços.php" class="btn">Serviços</a>
                    </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/slide-carro1.jpg) no-repeat">
                    <div class="content">
                        <span> Explore, saiba mais</span>
                        <h3>Seguros para o seu Carro</h3>
                        <a href="serviços.php" class="btn">Serviços</a>
                    </div>
            </div>

            <div class="swiper-slide slide" style="background:url(image/slide-contrato1.jpg) no-repeat">
                    <div class="content">
                        <span> Explore, saiba mais</span>
                        <h3>Descubra nossas Ofertas de Contrato</h3>
                        <a href="orçamentos.php" class="btn">Contrato</a>
                    </div>
            </div>
        </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

    </div>
</section>
<!--fim do Home-->


<!--Sequencia incial do serviço-->
<section class="serviços">
    <h1 class="heading-title">Nossos Serviços</h1>

    <div class= "box-container">
 
       <div class="box">
            <img src="image/bicicleta.png" alt="">
            <h2>Seguros de Moto</h2>
        </div>

        <div class="box">
            <img src="image/carro-suv.png" alt="">
            <h2>Seguros de Carro</h2>
        </div>
    </div>
</section>

<!--Fim do Serviço-->


<!--Inicio Informações home-->
<section class="home-sobre">
    <div class="image">
        <img src="image/equipe-vendas.jpg" alt="">
    </div>

    <div class="content">
        <h3>Sobre</h3>
        <p>Na página "Serviços" você vai encontrar nossos Equipe dedicada 24h, saber mais sobre as promoções e nossas ofertas. 
        Entre em contato e não perca nenhuma novidade através das nossas redes Sociais.</p>
        <a href="serviços.php" class="btn">Saiba mais</a>
    </div>
</section>
<!--Fim Informações home-->


<!--Inicio Pagina de Orçamento-->
<section class="home-pacotes">
    <h1 class="heading-title">Nossos Pacotes</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/contrato-pacote.jpg" alt="">
            </div>
                <div class="content">
                    <h3>Contrate um seguro para seu Veículo</h3>
                    <p>Não perca a oportunidade de Contratar um Seguro pra seu Veículo. 
                    Temos diversas promoções.
                    </p>
                    <a href="login.php" class="btn">Saiba mais</a>
                </div>
            
            
        </div>

        <div class="box">
            <div class="image">
                <img src="image/slide-carro1.jpg" alt="">
            </div>
                <div class="content">
                    <h3>Carro</h3>
                    <p>Não perca a oportunidade de Contratar um Seguro pra seu Veículo. 
                    Temos diversas promoções.
                    </p>
                    <a href="login.php" class="btn">Saiba mais</a>
                </div>
            
            
        </div>

        <div class="box">
            <div class="image">
                <img src="image/slide-moto1.jpg" alt="">
            </div>
                <div class="content">
                    <h3>Moto</h3>
                    <p>Não perca a oportunidade de Contratar um Seguro pra seu Veículo. 
                    Temos diversas promoções.
                    </p>
                    <a href="login.php" class="btn">Saiba mais</a>
                </div>
            
            
        </div>
    </div>
        <div class="saiba-mais"> <a href="login.php" class="btn"> Feche seu Contrato Aqui </a></div>

</section>
<!--Fim Pagina de Orçamento-->

<!--Inicio Status do Contrato-->
<section class="home-contrato">
    <div class="content">
        <h3>Confira seus Contratos, Promoções no 1º de até 30% off</h3>
        <p>Consulte seus Contratos, e acompanhe seu cache back.</p>
        <a href="contrato.php" class="btn">Status do Contrato</a>
    </div>
</section>
<!--Fim Status do Contrato-->


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

<!--h4F-#y.hy[m\zuJ-->