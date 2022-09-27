<?php 
include "conectar_login.php";

    $id = $_GET['id'];
    $sql = "delete from veiculo where id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:status_delete.php");
    }else{
        echo "Erro: " . mysqli_error($conn);
    }
?>