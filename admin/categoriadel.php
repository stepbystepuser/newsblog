<?php
require_once("../inc/conect.php");
require_once("../inc/pode.php");
$cod = addslashes($_GET['id']);
$sql = "DELETE FROM categoria WHERE id_categoria = '$cod'";	
	if(mysqli_query($conexao, $sql)){
			header("refresh:1; url=categoriaList.php");
			echo '<div class="center">';
  			echo 'Registro apagado com sucesso. Se não for redirecionado clique <a href="categoriaList.php">aqui</a>.'; 
  			echo '</div>';
	}else{
		echo "erro nessa bagaça";
	}
?>