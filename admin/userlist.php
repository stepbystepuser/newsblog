<?php
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/usercontrol.php");
$sql = "SELECT * FROM usuario";
$q = $conexao->query($sql);

 ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
	
</head>

<body>
	<header>Lista de Usuarios</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<section>
			<a class="link" href="userAdd.php"><h1></h1></a>
				
				<?php 
				while($r = mysqli_fetch_array($q)){ ?>
					<br>
					<div class='result'>
					<div class='nome'>Nome de Usuario: <i><?php echo $r['nome']; ?></i></div>
					<div> Email principal: <i><?php echo $r['email'];?></i></div>
					<div>Id de controle: <b><?php echo $r['id_usuario'];?></b> </div>
					<div>Nivel de acesso: <b><?php echo $r['nivel'];?></b> </div>
					<div class="buttons">
					<button class="alterar"><a class="linkw" href="userup.php?id=<?php echo $r['id_usuario'];?>" >Atualizar</a></button>
					<button class="excluir"><a class="linkw" href="userdel.php?id=<?php echo $r['id_usuario'];?>" >Apagar</a></button>
					<br><br>
					</div>
					<hr>
					</div>
			<?php	}
				?>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>