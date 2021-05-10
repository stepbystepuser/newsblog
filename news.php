<?php 
require_once("inc/conect.php");

$sql = "SELECT * from news where data=curdate()";
$q = $conexao->query($sql);

$sql2 = "SELECT u.nome, u.id_usuario, n.usuario_id_usuario, n.data FROM usuario AS u JOIN news AS n ON n.usuario_id_usuario = u.id_usuario";
$q2 = $conexao->query($sql2);
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/estiloall.css">
	<title>News Senac..:::::</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<section class="secao" id="">
			<?php while($r = mysqli_fetch_array($q)){  ?>	
				<div class="news">
					<div class="junto">
					<a id="linkable" href="newdetails.php?id=<?php echo "$r[id_news]" ;?>">
						<div class="foto"><img class="foto" src="image/<?php echo "$r[foto]";?>" alt=""></div>
						<div class="titulo">
								<h2><?php echo "$r[titulo]";?></h2>
						</div>
					</a>
						<div class="author">
							<?php if ($r2 = mysqli_fetch_array($q2)) {
								echo "$r2[nome],"." $r2[data]";
							} ?>
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