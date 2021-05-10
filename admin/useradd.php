<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/usercontrol.php");
 ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>

</head>

<body>
	<header>Cadastro de Usuarios</header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<p></p>
			<section class="">
				<form action="#" method="post" autocomplete="off">
				<input type="hidden" autocomplete="false">

				<label for="nome">Insira o nome do usuário:</label><br>
				<input class="estica" type="text" name="nome" maxlength="60" placeholder="Nome" required><br><br>

				<label for="email">Email do usuário</label><br>
				<input class="estica" type="email" name="email" placeholder="email" required><br><br>

				<label for="senha">Senha para o usuário:</label><br>
				<input class="estica" type="password" name="senha" placeholder="senha" required><br><br>

				<label for="niveis">Selecione o Nível de acesso:</label><br>
				<select name="niveis" id="niveis">
					<option value="0">Avançado</option>
					<option value="1">Médio</option>
					<option value="2">Mínimo</option>
				</select>
				<br><br>
				<div class="buttons">
				<input type="submit" value="Cadastrar" name="Cad" class="alterar">
				</div>
				</form>
					<?php 
					if (isset($_POST['Cad'])){
					$nome = addslashes($_POST['nome']);
					$email = addslashes($_POST['email']);
					$senha = addslashes($_POST['senha']);
					$nivel = addslashes($_POST['niveis']);
					$sql = "INSERT INTO usuario (id_usuario, nome, email, senha, nivel) VALUES 
					(null, '$nome', '$email', '$senha', '$nivel')";
						if (mysqli_query($conexao, $sql)) {
							echo "User succesful added!";
							header("refresh:1.5;url=userlist.php");
						}else{
							echo "Failed to add User!";
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