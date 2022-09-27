<?php
@include 'conectar_login.php';

session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];


    $select = "select * from user where email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);


    //Diferenciar adm de user usando o objeto "user_type"
    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_nome'] = $row['nome'];
            header('location:page_admin.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_nome'] = $row['nome'];
            header('location:orçamentos.php');

        }
    }else{
    $error[] = 'Email ou Senha incorreta!';
    }

};
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela Login</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <section class="header">

    <a href="" class="logo">TOP Service Seguros</a> 
    <nav class="navbar">
        <a href="home.php">Home</a>
    </nav>
    </section>
    <div class="bg-container">  
        <div class="user-container">
            <form action="" method="post">
                <h3>Acesse Agora!</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input type="email" name="email" required placeholder="Insira o e-mail">
                <input type="password" name="password" required placeholder="Insira a senha">
                <input type="submit" name="submit" value="Acesse Agora" class="form-btn">
                <p>Não tem cadastro?<a href="login.php"> Cadastre-se Aqui!</a></p>
            </form>
        </div>
    </div>
    <ul class="cubo">
    </ul>
        <script src="js/scriptcubo.js"></script>
    </body>
</html>