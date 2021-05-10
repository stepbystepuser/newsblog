<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
$cod = addslashes($_GET['id']);
$sql = "SELECT * FROM categoria WHERE id_categoria = '$cod'";
$q = mysqli_query($conexao, $sql);
$r = mysqli_fetch_assoc($q);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
<link rel="stylesheet" href="../css/estilobackend.css">
</head>

<body>
	<header></header>
	<nav>
		<?php 
		include("../inc/menu.php");
		 ?>
	</nav>
	<main>
		<article>
			<div class="content">
			<p>Atualizar registro de Categoria</p>
			<section>
				<form action="#" method="post">
					<input class="entrycon" type="text" name="retorno" required="on" value="<?php echo $r['nome'];?>">
					<input class="entrycon" type="submit" name="up">
				</form>
				<?php 
				if (isset($_POST['up'])) {
					$retorno = addslashes($_POST['retorno']);
					$sql2 = "UPDATE categoria SET nome = '$retorno' WHERE id_categoria = '$cod'";
					if(mysqli_query($conexao ,$sql2)){
						echo "Registro atualizado com sucesso!";
						header("refresh:1; url=categoriaList.php");
					}else{
						echo "Erro ao alterar registro $['nome']" . "<br>Erro (" . mysqli_error($conexao) .")";
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