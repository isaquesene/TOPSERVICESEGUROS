<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contratos</title>

    
    
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
        <a href="orçamentos.php">Fazer Orçamento</a>
        <a href="contrato.php">Status do Contrato</a>
        <a href="boletos.php">Visualizar Boleto</a>
        <a href="serviços.php">Solicitar Serviços</a>
    </nav>
 
<div id="menu-btn" class="fas fa-bars"></div>
<!--leva o menu-btn para o js-->  

</section>
<!-- fim do header-->

<div class="heading" style="background:url(image/fundojeep.jpg) no-repeat">
    <h1>Pesquisa</h1>
</div>

<section class="sobre-serviços">

    <div class="container-user">
        <form method="post">
            <div class="useres">
            <span>Consultar pedido :</span>
            <input type="text" placeholder="Aconpanhe seu processo..." name="doc">
            </div>
            <button class="btn" name="submit">Pesquisar</button>
        </form>
        <div class="container my-5">
                <table class="table">
                   <?php
                   @include 'conectar_login.php';
                   
                   if(isset($_POST['submit'])){
                        $doc=$_POST['doc'];

                        $sql = "select * from veiculo where id='$doc'";
                        $result=mysqli_query($conn, $sql);

                        if($result){
                           if(mysqli_num_rows($result)>0){
                            echo '<thead>
                            <tr>
                            <th>Nº</th>
                            <th>Nome</th>
                            <th></th>
                            <th>Status do Processo</th>
                            </tr>
                            </thead>';

                            $row=mysqli_fetch_assoc($result);
                            echo '<tbody>
                            <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['nome'].'</td>
                            <td></td>
                            <td>'.$row['status'].'</td>
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


