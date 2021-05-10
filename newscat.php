<?php 
require_once("inc/conect.php");
$id = 0;
$id = addslashes($_GET['id']);
if (isset($_GET['id'])) {
if ($id != 0){
	$slctcat = "SELECT * FROM news WHERE categoria_id_categoria = '$id'";
	$slctq = $conexao->query($slctcat);
	$sql = "SELECT c.nome, c.id_categoria, n.categoria_id_categoria, n.data, n.id_news,
	n.titulo FROM news AS n INNER JOIN categoria AS c WHERE '$id' = c.id_categoria 
	GROUP by c.nome LIMIT 10";
	$q = $conexao->query($sql);
}else{
	echo "Desculpe, aparentemente algo deu errado.. =/";
	}
}else{
	header('location:index.php');
}
 ?>

 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News Senac..:::::</title>
	<link rel="stylesheet" type="text/css" href="css/estiloall.css">
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-phone.css" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-tablet.css" content="width=device-width, initial-scale=1, user-scalable=no">	
	
	<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans+Condensed:300" rel="stylesheet">
</head>

<body>

	<?php
	include "inc/barrabusca.php";
	?>
		
	<main>
		<article>
			<h1><p class="title"><?php while($r2 = mysqli_fetch_array($q)) {
								echo "$r2[nome]";
							} ?></p></h1>
			<section class="secao" id="destaque">
			<?php while($r = mysqli_fetch_array($slctq)){  ?>
				
				<div class="news">
					<div class="junto">
					<a id="linkable" href="newdetails.php?id=<?php echo "$r[id_news]" ;?>">
						<div class="foto"><img class="foto" src="image/<?php echo "$r[foto]";?>" alt=""></div>
						<div class="titulo">
								<h2><?php echo "$r[titulo]";?></h2>
						</div>
					</a>
						<div class="author">
						<?php echo "$r[data]";?>
						</div><br>
						
						<div class="resumo"><?php echo "$r[resumo]";?></div>
					</div>
					<div class="presentation">
					<a class="linkpres" href="newdetails.php?id=<?php echo "$r[id_news]" ;?>">Ver cobertura completa</a>
					</div>
				</div>
				
			<?php	} ?>
			
			</section>
		</article>

	</main>
	<div class="peso"></div>
	<footer>
		<div class="rodape">Google News cloning by BR_dev</div>
	</footer>
</body>
</html>
