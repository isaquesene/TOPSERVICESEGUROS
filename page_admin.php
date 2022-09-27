<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, Chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador</title>

    <!-- swiper css-->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"/>
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
        <a href="page_admin.php">Admin</a>
        <a href="login.php" class="btngout">Logout</a>
    </nav>
 
<div id="menu-btn" class="fas fa-bars"></div>
<!--leva o menu-btn para o js-->  

</section>
<!-- fim do header-->

<div class="heading" style="background:url(image/fundojeep.jpg) no-repeat">
    <h1>Administrador</h1>
</div>
<div class="titulotable">
<h3>Tabela de Clientes</h3>
</div>
<div class="containeradmin">
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
        
    ?>

<table  id="search" class="tablee table-hover text-center" cellspacing="0" width="100%">
  <thead class="stilo">
    <tr>
     <!-- <th scope="col">Nº</th>-->
      <th scope="col">Nome</th>
      <!--<th scope="col">Documento</th>-->
      <!--<th scope="col">E-mail</th>-->
     <!-- <th scope="col">Endereço</th>-->
     <!-- <th scope="col">Modelo</th>-->
     <!-- <th scope="col">Valor FIP</th>-->
     <!-- <th scope="col">Marca</th>-->
     <!-- <th scope="col">Combustível</th>-->
     <!-- <th scope="col">Ano Fabricação</th> -->  
      <!--<th scope="col">Placa</th>-->
      <!--<th scope="col">Renavam</th>-->
      <th scope="col">Status</th>
      <th scope="col">Boleto</th>
      <th scope="col">Contrato</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    @include 'conectar_login.php';

    $sql = "select * from veiculo";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
     <!-- <th><?php echo $row['id']?></th> -->
      <th><?php echo $row['nome']?></th>
      <!--<th><?php echo $row['doc']?></th>-->
    <!--  <th><?php echo $row['email']?></th> -->
     <!-- <th><?php echo $row['endereço']?></th>
      <th><?php echo $row['modelo']?></th>
      <th><?php echo $row['valorfip']?></th>
      <th><?php echo $row['marca']?></th>
      <th><?php echo $row['combustível']?></th>
      <th><?php echo $row['ano']?></th>
      <th><?php echo $row['placa']?></th>
      <th><?php echo $row['renavam']?></th>-->
      <th><?php echo $row['status']?></th>
      <th><?php echo $row['boleto']?></th>
      <th><?php echo $row['contrato']?></th>


      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="bttn">Editar</i></a>
        <a href="deletar.php?id=<?php echo $row['id']?>" class="link-dark"><i class="bttn">Excluir</i></a>
      </td>
    </tr>
        <?php
    }

    ?>
    
  </tbody>
</table>
</div>


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


