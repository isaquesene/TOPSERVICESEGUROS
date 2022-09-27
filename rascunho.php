<?php

//gera o contrato do Seguro(pdf)

include("conectar.php");

//select em mysqli
$query_usuarios = "select nome, doc, email from veiculo";

$result_usuarios = $conn->prepare($query_usuarios);

$result_usuarios->execute();

//ler os registros do banco
//FETCH retorna uma unica Row de resultado. 
while($rows_usuarios = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
    var_dump($rows_usuarios);
}
?>





        <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600"><?php echo $_SESSION['nome'] ." ". $_SESSION['nomeguerra']; ?></h6>
                            <p class="mb-0 text-sm text-gray-600"><?php echo $_SESSION['email']; ?></p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">                                                
                                <?php 
                                if($_SESSION['foto_nao_encontrada']){
                                    echo '<img src="' . $_SESSION[''] . '" />'; 
                                } else {
                                    echo '' . $_SESSION[''] . '" />'; 
                                }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

                    <li><a class="dropdown-item" href="logout.php"><i
                                class="icon-mid bi bi-box-arrow-left me-2"></i> Sair</a></li>
                </ul>
            </div>


            <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <?php include 'navbar.php';?>                
            </header> </div>