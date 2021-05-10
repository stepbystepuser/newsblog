<?php
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/newscontrol.php");
$sql = "SELECT id_news, titulo, data FROM news";
$q = $conexao->query($sql);

 ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>

</head>
<body class="">
	<header>Lista de notícias</header>
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
					while ($r = mysqli_fetch_array($q)){ ?>
						<div class="news">
					Título da notícia:	<div class="titulo">
					<?php	echo "$r[titulo]";  ?>
							</div>
							<div class="id_news">
					ID da notícia: <?php echo $r['id_news']; ?>
							</div>
							<div class="data"><br> 
					Data:	<?php echo "$r[data]";  ?>
							</div>
					<?php	echo "<br>"; 		?>
					<div class="buttons">
						<button class="alterar" name="altera"><a class="linkw" href="newsup.php?id=<?php echo $r['id_news']; ?>">Alterar</a></button>
						<button class="excluir" name="exclui"><a class="linkw" href="newsdel.php?id=<?php echo $r['id_news']; ?>">Excluir</a></button>
						 <br><br>
					</div>
					<hr>
					<br>
				 </div>
				 <?php } ?> 
			</section>
			</div>
		</article>
	</main>
	<footer></footer>
</body>
</html>