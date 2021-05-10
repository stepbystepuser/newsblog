<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
	$sql = "SELECT * FROM usuario";
	$q = $conexao->query($sql);
	$ru = mysqli_num_rows($q);

	$sql2 = "SELECT * FROM categoria";
	$q2 = $conexao->query($sql2);
	$rc = mysqli_num_rows($q2);

	$sql3 = "SELECT * FROM news";
	$q3 = $conexao->query($sql3);
	$rn = mysqli_num_rows($q3);
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
<link rel="stylesheet" href="../css/estilobackend.css">
</head>

<body class="fundo2">
	<header>Area de Controle Administrativo</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
		
	</nav>
	<main>
		<article>
			<div class="content">
				<div class="esquerda">
			<section>
				<?php 
				echo "Bem vindo <i> {$_SESSION['nome']} </i>,
				<br>
				email: <i> {$_SESSION['email']} </i>,<br>
				ID de usuario: {$_SESSION['id_usuario']},<br>
				nivel de acesso Administrativo:  {$_SESSION['nivel']}";
				 ?>
				 </div>
				 <div class="feedback">
				 	<?php 
				 		echo "<br>";
				 		echo $ru . " usuários cadastrados";

				 		echo "<br>";
				 		echo $rc . " categorias cadastradas";

				 		echo "<br>";
				 		echo $rn . " notícias cadastradas";
				 	 ?>
				 </div>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>