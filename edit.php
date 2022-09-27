<?php
include  "conectar_login.php";

$id = $_GET['id'];

    if(isset($_POST['editar'])){
    $name = $_POST['nome'];
    $doc = $_POST['doc'];
    $email = $_POST['email'];
    $modelo = $_POST['modelo'];
    $valorfip = $_POST['valorfip'];
    $marca = $_POST['marca'];
    $combustivel = $_POST['combustível'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $renavam = $_POST['renavam'];
    $endereco = $_POST['endereço'];
    $status = $_POST['status'];
    $boleto = $_POST['boleto'];
    $contrato = $_POST['contrato'];

        $sql = "update veiculo set nome='$name',doc='$doc',email='$email',modelo='$modelo',valorfip='$valorfip',marca='$marca',combustível='$combustivel',ano='$ano',placa='$placa',renavam='$renavam',endereço='$endereco',status='$status',boleto='$boleto',contrato='$contrato' where id=$id";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location:status_edit.php");
        }else{
            echo "erro: " . mysqli_error($conn);
        }
    }

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
        <a href="page_admin.php">Admin</a>
    </nav>
 
<div id="menu-btn" class="fas fa-bars"></div>
<!--leva o menu-btn para o js-->  

</section>
<!-- fim do header-->

<div class="heading" style="background:url(image/fundojeep.jpg) no-repeat">
    <h1></h1>
</div>

<!--Incio CRUD-->
<section class="Cadastro">
    <h2 class="heading-title">Editar Cliente</h1>
    <?php 
    $id = $_GET['id'];
    $sql = "select * from veiculo where id = $id limit 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="" method="post" class="crud-form">
        <div class="flex">
            <div class="inputox">
                <span>Nome Completo :</span>
                <input type="text" placeholder="Insira Nome Completo" name="nome" value="<?php echo $row['nome']?>">
            </div>
            <div class="inputox">
                <span>Documento :</span>
                <input type="text" placeholder="Insira o CPF, RG ou CNH" name="doc" value="<?php echo $row['doc']?>">
            </div>
            <div class="inputox">
                <span>Email :</span>
                <input type="text" placeholder="Insira seu e-mail" name="email" value="<?php echo $row['email']?>">
            </div>
            <div class="inputox">
                <span>Endereço :</span>
                <input type="text" placeholder="Insira seu endereço" name="endereço" value="<?php echo $row['endereço']?>">
            </div>
            <div class="inputox">
                <span>Modelo :</span>
                <input type="text" placeholder="Insira o modelo" name="modelo" value="<?php echo $row['modelo']?>">
            </div>
            <div class="inputox">
                <span>Valor tabela FIP :</span>
                <input type="number" placeholder="Insira o valor" name="valorfip" value="<?php echo $row['valorfip']?>">
            </div>
            <div class="inputox">
                <span>Marca :</span>
                <input type="text" placeholder="Insira marca" name="marca" value="<?php echo $row['marca']?>">
            </div>
            <div class="inputox">
                <span>Combustivel :</span>
                <input type="text" placeholder="Insira o tipo combustivel" name="combustível" value="<?php echo $row['combustível']?>">
            </div>
            <div class="inputox">
                <span>Ano de fabricação :</span>
                <input type="date" name="ano" value="<?php echo $row['ano']?>">
            </div>
            <div class="inputox">
                <span>Placa :</span>
                <input type="text" placeholder="Insira a Placa" name="placa" value="<?php echo $row['placa']?>">
            </div>
            <div class="inputox">
                <span>Renavam :</span>
                <input type="text" placeholder="Insira o renavam" name="renavam" value="<?php echo $row['renavam']?>">
            </div>
            <div class="inputox">
                <span>Status :</span>
                <input type="text" placeholder="Status do Processo" name="status" value="<?php echo $row['status']?>">
            </div>
            <div class="inputox">
                <span>Boleto :</span>
                <input type="file" id="test" name="boleto" accept=".pdf,.doc" value="<?php echo $row['boleto']?>">
            </div>
            <div class="inputox">
                <span>Contrato :</span>
                <input type="file" id="test" name="contrato" accept=".pdf,.doc" value="<?php echo $row['contrato']?>">
            </div>
        </div>


        <input type="submit" value="Cadastrar" class="btn" name="editar">

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


