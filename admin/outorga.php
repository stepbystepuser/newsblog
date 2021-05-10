<?php 
$cod = addslashes($_GET['id']);
require_once("../inc/conect.php");
require_once("../inc/pode.php");
$confere_ids = "SELECT * FROM usuario";
$query = $conexao->query($confere_ids);
while ($rowids = mysqli_fetch_array($query)) {
	echo '<div class="content">';
	echo "Id disponivel: " . $rowids['id_usuario'];
	echo "<br>";
	echo "Nome correspondente: " . $rowids['nome'];
	echo "<br>";
	echo "================================================";
	echo "<br>";
	echo '</div>';
}
$sql = "SELECT usuario_id_usuario FROM news";
$q2 = $conexao->query($sql);
//echo "$cod";
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
</head>
<body>
	<header>	</header>
	<nav></nav>
	<main>
		<article>
	
			<div class="content">
			<p>Outorga de Autoria</p>
			<section>
				Selecione algum id para outorga de autoria:
				<form method="post" action="#">
					<input type="number" name="idupdate" class="estica" autofocus required>
					<div class="buttons"><input type="submit" class="alterar" name="out"></div>
				</form>
				<?php 
				if (isset($_POST['out'])) {
					$idup = $_POST['idupdate'];
					$sqlo = "UPDATE news SET usuario_id_usuario = '$idup' WHERE usuario_id_usuario = '$cod' ";
					if (mysqli_query($conexao, $sqlo)) {
						header("refresh:1.4;url=userdel.php?id=$cod");
						echo "Updated";
						
					}else{
						"Infelizmente encontramos um erro, por favor reporte ao administrador do site!" . mysqli_error($conexao);
					}
				}
				?>
			</section>
			<div class="buttons">
			<button class="excluir"><a href="../admin/userlist.php">Voltar</a></button></div>
			</div>
			
		</article>
	</main>
	<footer></footer>

</body>
</html>