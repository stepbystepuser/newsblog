<?php 
include("inc/conect.php");

$id = addslashes($_GET['id']);
if (isset($_GET['id'])) {

$sql = ("SELECT * FROM news WHERE id_news = '$id'");
$q = $conexao->query($sql);
$r = mysqli_fetch_array($q);

$nomeautorSQL = "SELECT u.nome, n.data FROM usuario u INNER JOIN news n ON 
n.usuario_id_usuario=u.id_usuario where n.id_news='$id'";
$naq = $conexao->query($nomeautorSQL);
$na = mysqli_fetch_array($naq);
}else{
	header('location:index.php');
}
?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News Senac <?php echo "$r[titulo]";?> </title>
	<link rel="stylesheet" type="text/css" href="css/estiloall.css">
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-phone.css" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" media="screen" href="css/for-tablet.css" content="width=device-width, initial-scale=1, user-scalable=no">	
	
	<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans+Condensed:300" rel="stylesheet">
</head>

<body>
	<?php
	include "inc/barrabusca.php";
	?>
	<main class="ndart">
		<article class="">
			
			<section class="newdtsec" >
				<div class="newdetails">
					<!--LETRA SUPERGRANDE-->
					<h1 class="ndtitle"><?php echo "$r[titulo]";?></h1>
					<div class="resumo"><?php echo "$r[resumo]";?></div><br>
					
					<div class="autordata"><?php echo "$na[nome], $na[data]";?></div><br>
					<br>
					<hr>
					<br>
					<!-- TRAZER DATA-->
					<div class="newdetailsfoto">
						<img class="newdetailsimg" src="image/<?php echo "$r[foto]";?>" alt="">
					</div>
<br><br>
					<!-- TRAZER AUTOR-->
			
					<div class="textond"><?php echo "$r[texto]";?></div>
					
				</div>
			</section>
		</article>

	</main>
	<div class="peso"></div>
	<footer>
		<div class="rodape">Google News cloning by BR_dev</div>
	</footer>
</body>
</html>