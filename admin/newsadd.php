<?php 
require_once("../inc/conect.php");
require_once("../inc/pode.php");
require_once("../inc/newscontrol.php");
$sql = "SELECT * FROM categoria";
$q = $conexao->query($sql);


	if (isset($_POST['vai'])) {
		$data = date('Y-m-d-H:i:s');
		$up = $_FILES["foto"]["size"];
		if ($up != 0) {
			$nome = $_FILES["foto"]["name"];
			$completo = $nome."_".$data;
			$path_parts = pathinfo($nome);
			$md5NomeFoto = md5($completo);
			$nomeFinal = $md5NomeFoto.".".$path_parts['extension'];
			$targetPath = 0;
			$targetFile = str_replace('//', '/', $targetPath).$nomeFinal;
			$temp = $_FILES['foto']['tmp_name'];
			$dir = "../image/".$targetFile;
			move_uploaded_file($temp, $dir);
			$foto = $targetFile;
			}else{
				$default = "fotodefault.jpg";
				$foto = $default;
			}
			$datacad = addslashes(date('Y-m-d'));
			$cat = addslashes($_POST['categoria']);
			$titulo = addslashes($_POST['titulo']);
			$texto = addslashes($_POST['texto']);
			$resumo= addslashes($_POST['resumo']);
			$user = $_SESSION['id_usuario'];
			
		$sql2 = "INSERT INTO news(id_news, titulo, foto, data, texto, resumo, usuario_id_usuario, categoria_id_categoria) VALUES 
				(NULL , '$titulo', '$foto', '$datacad', '$texto', '$resumo', '$user', '$cat')";


			if (mysqli_query($conexao, $sql2)) {
				header('refresh:2;url=newsList.php');
				echo "Noticias adicionada com sucesso!";
			}else{
				echo "Erro ao subir noticia =/ " . mysqli_error($conexao);
				var_dump($categoria);
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
	<header>Adicionar Noticias ao NewSenac</header>
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
				<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
					<input type="hidden" autocomplete="false">
					<label for="titulo">Insira o título da notícia:</label><br>
					<input class="estica" type="text" name="titulo" placeholder="Ex: Palmeiras não tem mundial" maxlength="100" required="on"><br><br>
					<label for="resumo">Resumo da Noticia</label><br>
					<textarea class="txta" rows="4" cols="20" placeholder="Ex: Mesmo sem mundial o time continua forte e busca o empate no jogo de hoje" name="resumo" maxlength="200" required="on"></textarea><br><br>
					
					<label for="texto">Texto principal da notícia</label>
					<textarea rows="10" class="txta" cols="22" maxlength="3000" placeholder="Texto Completo Aqui" name="texto" required="on"></textarea><br><br>

					<label for="foto">Selecione o arquivo de imagem:</label>
					<input type="file" name="foto" id="foto" required="on"><br><br>
					
					<label for="categoria">Qual a categoria da notícia?</label> <br>
					<select name="categoria" id="categoria">
						<?php while($r = mysqli_fetch_array($q)) { ?>
						<option value="<?php echo "$r[id_categoria]"; ?>">
							<?php echo "$r[nome]"; ?>
						</option>
						<?php } ?>
					</select> <br>
					
					<div class="buttons">
					<input type="submit" value="Cadastrar" class="alterar" name="vai">
					</div>
					
				</form>
			</section>
			</div>
		</article>
	</main>
	<footer></footer>

</body>
</html>