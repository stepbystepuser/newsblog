<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/newscontrol.php");
	$cod = addslashes($_GET['id']);
	$sql = "SELECT * FROM categoria";
	$q = $conexao->query($sql);
	$sql2 = "SELECT * FROM news INNER JOIN categoria ON categoria.id_categoria = news.categoria_id_categoria WHERE id_news = '$cod'";
	$q2 = $conexao->query($sql2);
	$r2 = mysqli_fetch_array($q2);
	if(isset($_POST['vai'])) {
		$oldFoto = addslashes($_POST['fotoAntiga']);
		$data = addslashes(date('d-m-YH:i:s'));
		$file = addslashes($_FILES["foto"]["size"]);
		if (!empty($file)) {
			$nomeFile = $_FILES["foto"]["name"];
			$nomeCompleto = $nomeFile."_".$data;
			$caminho = pathinfo($nomeFile);
			$hashFotoNome = md5($nomeFile);
			$finalNameFoto = $hashFotoNome.".".$caminho['extension'];
			$caminhoAlvo = 0;
			$arquivoAlvo = str_replace('//', '/', $caminhoAlvo).$finalNameFoto;
			$temp = $_FILES['foto']['tmp_name'];
			$dir = "../image/".$arquivoAlvo;
			move_uploaded_file($arquivoAlvo, $dir);
			$foto = $arquivoAlvo;
		}else{
			$foto = $oldFoto;
		}



		$id = addslashes($_POST['id_news']);
		$titulo = addslashes($_POST['titulo']);
		$resumo = addslashes($_POST['resumo']);
		$texto = addslashes($_POST['texto']);
		$cat = addslashes($_POST['categoria']);
		$user = $_SESSION['id_usuario'];
		$datatab = addslashes(date('Y-m-d'));
		$sql3 = "UPDATE news SET id_news = '$id',titulo = '$titulo', foto = '$foto', data= '$datatab', texto = '$texto', resumo = '$resumo', usuario_id_usuario = '$user', categoria_id_categoria = '$cat' WHERE id_news = '$cod'";
		if (mysqli_query($conexao, $sql3)) {
			header("refresh:2, url=newsList.php");
			echo("Notícia atualizada com sucesso!");
		}else{
			echo "Erro ao atuzalizar notícia ".mysqli_error($conexao);
		}
	}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilobackend.css">
	<meta charset="utf-8">
	<title>Controle - BackEnd</title>
	
</head>
<body>
	<header>Atualizar notícias</header>
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
				<form action="#" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_news" value="<?php echo "$r2[id_news]";?>">
					<input type="hidden" name="fotoAntiga" value="<?php echo "$r2[foto]";?>">
					<label for="titulo">Insira NOVO título da notícia</label><br>

					<input type="text" class="estica" name="titulo" placeholder="Titulo da Noticia" maxlength="100" required="on" value="<?php echo "$r2[titulo]";?>"><br><br>
					
					<label for="resumo">NOVO Resumo da notícia **MAX 200 Chars**</label><br>
					
					<textarea class="txta" rows="4" cols="52" placeholder="Resumo da Noticia" name="resumo" maxlength="200" required="on"><?php echo "$r2[resumo]";?></textarea><br><br>
					
					<label for="texto">Insere NOVO texto principal</label><br>
					
					<textarea class="txta" rows="15" cols="52" placeholder="Noticia Completa" name="texto" required="on"><?php echo "$r2[texto]"?></textarea><br><br>
					
					<label for="categoria">Seleciona categoria da notícia</label><br>
					
					<select name="categoria" id="categoria">
						<?php while($r = mysqli_fetch_array($q)) { ?>
						<option value="<?php echo "$r[id_categoria]"; ?>">
							<?php echo "$r[nome]"; ?>
						</option>
						<?php } ?>
					</select> <br><br>
					
					<label for="foto">Selecione arquivo de imagem*</label><br>
					
					<input type="file" name="foto" id="foto"><br>
					
					<br><div class="buttons">
					
					<input type="submit" name="vai" class="alterar" value="Atualizar"><br>	
					</div>
				</form>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>
</body>
</html>