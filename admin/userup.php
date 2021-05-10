<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/usercontrol.php");
$cod = addslashes($_GET['id']);
$sql = "SELECT * FROM usuario WHERE id_usuario = '$cod'";
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
	<header>Atualizar cadastro de Usuarios</header>
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
				<form action="#" method="post">
					<?php while($r = mysqli_fetch_array($q)) { ?>
				<label for="nome">Nome de <?php echo $r['nome'];?></label><br>
				<input type="text" name="nome" maxlength="60" placeholder="Nome" value="<?php echo $r['nome']; ?>" required><br>
				<label for="email">Email de <?php echo  $r['nome'];?></label><br>
				<input type="email" name="email" placeholder="email" value="<?php echo $r['email']; ?>" required><br>
				<label for="senha">Senha de acesso do portal</label><br>
				<input type="text" name="senha" placeholder="senha" value="<?php echo $r['senha']; ?>" required><br>
				<select name="niveis" id="niveis">
					<option value="0">Avançado</option>
					<option value="1">Médio</option>
					<option value="2">minimo</option>
				</select>
				<input type="submit" name="Up">
					<?php	} ?>
				</form>
				<?php 
				if (isset($_POST['Up'])) {
					$nome = addslashes($_POST['nome']);
					$email = addslashes($_POST['email']);
					$senha = addslashes($_POST['senha']);
					$nivel = addslashes($r['nivel']);

				$sql2 = "UPDATE `usuario` SET `nome`= '$nome',`email`= '$email',`senha`= $senha, `nivel`= '$nivel' WHERE id_usuario = '$cod'";
						if (mysqli_query($conexao, $sql2)) {
							echo "User succesful Updated!";
							header("refresh:1.5;url=userlist.php");
						}else{
							echo "Failed to Update User!" . mysqli_error($conexao);
						}

				}

				 ?>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>