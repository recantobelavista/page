<?php


include_once('conect.php') ;
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$msg = $_POST['msg'];

$from = $email;

$to = "recantobelavista445@gmail.com";

$subject = "<strong>Novo usuario Cadastrado</strong>";

$message = 'Nome:$nome<br>
data:$$data<br>
Feedback:$msg';

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

?>
