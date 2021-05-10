<?php 
header("refresh:3;url=index.php");
session_start();
echo $_SESSION['nome'];
	unset(
		$_SESSION['liberado'],
		$_SESSION['email'],
		$_SESSION['nome'],
		$_SESSION['nivel'],
		$_SESSION['id_usuario']
	);
session_destroy();

echo " Logout efetuado com sucesso!!";


 ?>