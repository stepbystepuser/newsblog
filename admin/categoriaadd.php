<?php
require_once('../inc/conect.php');
require_once("../inc/pode.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
	<link rel="stylesheet" href="../css/estilobackend.css">
</head>

<body class="fundo2">
	<header>Adicionar Categoria</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			
			<section>
				<form method="post" action="#" autocomplete="off">
					<input type="hidden" autocomplete="false">
				<label class="" for="addcat">Cadastrar nome de categoria:</label><br>
				<input class="estica" placeholder="Ex: Esportes" type="text" name="addcat" required maxlenght="100"><br>
				<div class="buttons">
				<input class="alterar" type="submit" name="ok" value="Adicionar">
				</div>
				<?php 
				if(isset($_POST['ok'])){
					
				$addcat = addslashes($_POST['addcat']);
				$sql = "INSERT INTO categoria(id_categoria, nome) VALUES (NULL, '$addcat')";
				$q = $conexao->query($sql);
					
				header("Location:categoriaList.php");
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