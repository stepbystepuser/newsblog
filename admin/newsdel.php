<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/newscontrol.php");
$cod = addslashes($_GET['id']);
$msg = "Essa operação não pode ser desfeita!!!";
$sql = "DELETE FROM news WHERE id_news = '$cod'";
if (isset($_POST['deleta'])) {
	if(mysqli_query($conexao, $sql)){
		
		header("refresh:1;url=newslist.php");
		echo "Registro completamente apagado!!";

	exit;
	}
	echo "Encontramos um erro =( " . mysqli_error($conexao);
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
	<header>Apagar notícia?</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<p></p>
			<section>
				<?php 
				echo($msg);
				 ?>
				<form action="#" method="post">
					<div class="buttons">
						<br>
				<input type="submit" name="deleta" class="excluir" value="Apagar" />
					</div>
				</form>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>