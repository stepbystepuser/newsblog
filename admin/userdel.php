<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/usercontrol.php");
if($_SESSION['nivel'] != 0){
	echo "Você não tem permissão!";
}else{
$cod = addslashes($_GET['id']);
$sql = "SELECT * FROM usuario WHERE id_usuario = '$cod'";
$q = $conexao->query($sql);
$r = mysqli_fetch_array($q);

$verify = "SELECT usuario_id_usuario FROM news WHERE usuario_id_usuario = '$cod'";
$qv = $conexao->query($verify);
$countv = mysqli_num_rows($qv);
if ($countv > 0) {
	header("refresh:4;url=outorga.php?id=$cod");
	echo '<br>';
	echo "Usuario possui artigos vinculados à sua conta, não é possível apagar registro.";
	
 exit;
	}
}
 ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>

</head>

<body>
	<header></header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<p>Deletar registro de usuarios</p>
			<section>
				Tem certeza que deseja apagar <?php echo $r['nome']; ?> <br>
				<form action="#" method="post">
				<input type="submit" name="deleta" value="Sim">
				<button name="volta"><a href="userlist.php">Não</a></button>
				<?php  
				
				
				if (isset($_POST['deleta'])) {
					$del = "DELETE FROM usuario WHERE id_usuario = '$cod'";

					if (mysqli_query($conexao, $del)) {
						echo "Registro deletado com sucesso!\n Você será redirecionado em 1 sec";
						header("refresh:1.5; url=userlist.php");
					}else{
						echo "Infelizmente encontramos um erro: " . mysqli_error($conexao);
					}
				}
				?>

				</form>
			</section>
			</div>	
		</article>
	</main>
	<footer></footer>

</body>
</html>