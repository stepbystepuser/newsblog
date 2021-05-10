<?php
$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$empresanome = addslashes($_POST['empresanome']);
$departamento = addslashes($_POST['departamento']);
$mensagem = addslashes($_POST['mensagem']);

ini_set('display_errors', 1);
error_reporting(E_ALL);
$to  = "put_your_mail.com";
$subject = "$nome, email: $email, tel: $telefone from $departamento at $empresanome";
$message = "$mensagem";
$headers = "De: $nome, Tel: $tel,email: $email, at: $empresanome";

if(mail($to, $subject, $message, $headers)){
    echo "A mensagem foi realmente enviada."; 
    echo "<br/>";
    echo "$mensagem"; 
    header("refresh:2;url=index.php");
}else{
echo "A mensagem não foi enviada.";
}
?>