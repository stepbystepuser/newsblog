<?php 
session_start();

if ($_SESSION['liberado']) {
	echo "Você não tem permissão";
	echo "<br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
echo "Você não tem permissão";
#echo '<a href="javascript:history.back();">Voltar</a>';
header("location:index.php");
}
 ?>
