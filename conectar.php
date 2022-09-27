<?php

$conn = mysqli_connect('localhost','root','','topservice');


if(isset($_POST['send'])){
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


    $request = "insert into veiculo(nome, doc, email, modelo, valorfip, marca, combustível, ano, placa, renavam, endereço) values 
    ('$name','$doc','$email','$modelo','$valorfip','$marca','$combustivel','$ano','$placa','$renavam', '$endereco')";


    mysqli_query($conn, $request);

    header('location:statuscrud.php');
}else{
    echo '';
}
?>
