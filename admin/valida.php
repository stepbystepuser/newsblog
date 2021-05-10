<?php 
require_once("../inc/conect.php");

$login = addslashes($_POST['login']);
$pw = addslashes($_POST['pw']);

$sql = "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$pw'";
$q = $conexao->query($sql);

if ($r = mysqli_fetch_array($q)) {
	header("refresh:2;url=home.php");
	echo "Acesso Liberado";
		if($_SESSION['liberado'] = true) {
		$_SESSION['email'] = $r['email'];
		$_SESSION['nome'] = $r['nome'];
		$_SESSION['nivel'] = $r['nivel'];
		$_SESSION['id_usuario'] = $r['id_usuario'];
	}
}else{
	header('refresh:2;url=index.php');
	echo "Acesso negado";
}

 mysqli_close($conexao);