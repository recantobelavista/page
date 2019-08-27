<?php


#include_once('conect.php') ;
$nome = $_GET['nome'];
$email = $_GET['email'];
$data = $_GET['data'];
$msg = $_GET['msg'];

$from = $email;

$to = "recantobelavista445@gmail.com";

$subject = "<strong>Novo usuario Cadastrado</strong>";

$message = 'Nome:$nome<br>
data:$$data<br>
Feedback:$msg';

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

?>
