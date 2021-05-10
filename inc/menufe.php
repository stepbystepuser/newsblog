<?php 

$categoria = "SELECT * FROM categoria";
$catq = $conexao->query($categoria);

 ?>
 <div class="bordateto">
<nav>
	<a href="index.php"><div class="link">Home</div></a>
	<a href="news.php"><div class="link">Notícias do dia</div></a>
	<a href="admin/index.php"><div class="link">Login</div></a>
	<a href="contato.php"><div class="link">Contato</div></a>
	<hr>
	<div class="linkAlt">Categorias</div>
	<hr>
	<?php 
	while ($rcat = mysqli_fetch_array($catq)) { ?>
			<a href="newscat.php?id=<?php echo $rcat['id_categoria']; ?> "><div class="link"><?php echo $rcat['nome']; ?></div></a>
		<?php	}
	 ?>
 </nav>
</div>