<?php


include_once('conect.php') ;
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$msg = $_POST['msg'];

$inserirdados = "INSERT INTO feedback(nome, email, data, msg) VALUES('$nome','$email','$data','$msg')";
$concletizacao = mysqli_query($conn, $inserirdados);
header('Location:index.php');


 ?>
