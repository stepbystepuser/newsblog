<?php
require_once('inc/conect.php');
$busca = 0;
$busca = addslashes($_GET['busca']);

if ($busca != true) {
	header("location:index.php");
}else{
$sql = "SELECT  id_news, titulo, texto, resumo FROM news WHERE titulo LIKE '%$busca%' OR texto LIKE '%$busca%'";
$q = $conexao->query($sql);
	if(!mysqli_num_rows($q)){
	echo "Não encontramos nada";
	header('refresh:2;url=index.php');
	exit;
	}
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New's Senac..:::::</title>
	<link rel="stylesheet" href="css/estiloall.css ">
	
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
		<p class="title">Resultados para busca <?php echo " \" $busca \" ";?></p>
		<?php while($result = mysqli_fetch_array($q)) { ?>
			
			<section id="destaque">
				<div class="news">
					<h1 class="titulo"><?php echo $result['titulo'];?></h1>
					<div class="resumo">
					<?php echo $result['resumo'];?>
					</div>
					<a class="linkpres" href="newdetails.php?id=<?php echo "$result[id_news]";?>">Ver mais +</a>
					
				</div>
			</section>
		<?php }	?>
		</article>

	</main>
	<div class="peso"></div>
	<footer>
		<div class="rodape">Google News cloning by BR_dev</div>
	</footer>
</body>
</html>