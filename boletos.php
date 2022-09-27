<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boleto</title>

    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"/>
    
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

<div class="heading" style="background:url(image/fundojeep.jpg) no-repeat">
    <h1>Boleto</h1>
</div>

<section class="sobre-serviços">

    <div class="container-user">
        <form method="post">
            <div class="useres">
            <span>Consultar boleto :</span>
            <input type="text" placeholder="Insira seu documento." name="doc">
            </div>
            <button class="btn" name="submit">Pesquisar</button>
        </form>
        <div class="container my-5">
                <table class="table table-striped table-hover">
                   <?php
                   @include 'conectar_login.php';
                   
                   if(isset($_POST['submit'])){
                        $doc=$_POST['doc'];

                        $sql = "select * from veiculo where nome='$doc' or doc='$doc'";
                        $result=mysqli_query($conn, $sql);

                        if($result){
                           if(mysqli_num_rows($result)>0){
                            echo '<thead>
                            <tr>
                            <th>Nome</th>
                            <th></th>
                            <th>Boleto</th>
                            </tr>
                            </thead>';

                            $row=mysqli_fetch_assoc($result);
                            echo '<tbody>
                            <tr>
                            <td>'.$row['nome'].'</td>
                            <td></td>
                            <td><a href="boleto/boleto.pdf" class="contrato" download>'.$row['boleto'].'</a></td>
                            </tr>
                            </tbody>';
                           }else{
                            echo '<h2>Processo não encontrado!</h2>';
                           }
                        }
                   }
                   ?> 
                
                </table>
        </div>
    </div>

    <div class="orintacontrato">
     <h3>Duvidas sobre seu Contrato:</h3>
        <p>Ao solicitar o contrato, nossa equipe vai análisar o pedido.</p>
        <p>Em 5 dias úteis você já pode fazer a consulta.</p>
        <p>Esperamos que de tudo certo, contamos com você no nosso time!</p> 
    </div>

<!--Inicio Serviços-Sobre-->
<section class="sobre-serviços">
        <div class="image">
            <img src="image/telecom.jpg" alt="">
        </div>

        <div class="content">
            <div class="icons-container">
            <h3>Se precisar de Ajuda entre em contato!</h3>
                <div class="icons">
                    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fas fa-envelope"></i></a>
                    <span>Entre emcontato:  atendimentotopservice@yahoo.com</span>
                </div>
                <div class="icons">
                    <i class="fas fa-warning"></i>
                    <span>Telefone de Emergência:   (12)3902-9307</span>
                </div>
                <div class="icons">
                    <a href="https://api.whatsapp.com/send?phone=5512988774128&text=Top+Service+Seguros+Como+podemos+Ajudar?" target="_blank"><i class="fas fa-headset"></i></a>
                    <span>Atendemos 24h</span>
                </div>
            </div>
        </div>

    </section>
<!--Fim Serviços-Sobre-->
</section>

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Customização do Js -->
    <script src="js/script.js"></script>

</body>
</html>


