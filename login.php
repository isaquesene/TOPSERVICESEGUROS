<?php
@include 'conectar_login.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];


    $select = "select * from user where email = '$email' && password = '$password'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'Login já existe!'; 

    }else{
        if($password != $cpassword){
            
            $error[] = 'Senha não corresponde!'; 
        }else{
            $insert = "insert into user(nome, email, password, user_type) values ('$name', '$email', '$password', '$user_type')";
            mysqli_query($conn,$insert);
            header('location:login_form.php');
        }
    }

};


?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela Registro</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <section class="header">

    <a href="home.php" class="logo">TOP Service Seguros</a> 

    <nav class="navbar">
        <a href="home.php">Home</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="bg-container">  
        <div class="user-container">
            <form action="" method="post">
                <h3>Registre-se Agora!</h3>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <input type="text" name="nome" required placeholder="Insira o nome">
                <input type="email" name="email" required placeholder="Insira o e-mail">
                <input type="password" name="password" required placeholder="Insira a senha">
                <input type="password" name="cpassword" required placeholder="Confirme a senha">
                <select name="user_type">
                    <option value="user">user</option>
                </select>
                <input type="submit" name="submit" value="cadastre-se Agora" class="form-btn">
                <p>Já tem um cadastro?<a href="login_form.php"> Login Aqui!</a></p>
            </form>
        </div>
    </div>
    <ul class="cubo">
    </ul>
        <script src="js/scriptcubo.js"></script>
    </body>
</html>



