<?php 
require_once("../inc/pode.php");
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
	<link rel="stylesheet" href="../css/estilobackend.css">
</head>

<body>
	<header>LISTA DE CATEGORIAS</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<h1><p></p></h1>
			
			<section>
			<?php
			require_once("../inc/conect.php");
			$sql = "SELECT * FROM categoria ORDER BY Nome ASC";
			$q = $conexao->query($sql);
			 while($r = mysqli_fetch_array($q)){ ?>
			<div class="buttons">	 
			<h3><?php echo "$r[nome]"; ?></h3>

				<button class="alterar" value=""><a class="linkw" href="categoriaUp.php?id=<?php echo $r['id_categoria'];?>">Alterar</a></button>
				<button class="excluir" value=""><a class="linkw" href="categoriaDel.php?id=<?php echo $r['id_categoria'];?>">Excluir</a></button>
				
				<?php  echo '<br><br>'; ?>
			</div>	 
			<?php } ?>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>