
	
		<ul class="menu">
		<li><a href="home.php">Home</a></li>
		
		<li><a href="#">Usuários</a>
			<ul class="sub-menu">
				<li><a href="../admin/userlist.php">Lista de usuários</a></li>
				<li><a href="../admin/useradd.php">Adicionar usuário</a></li>
			</ul>
		</li>

		
		<li ><a href="#">Categorias</a>
			<ul class="sub-menu">
				<li ><a href="../admin/categorialist.php">Lista de Categorias</a></li>
				<li ><a href="../admin/categoriaadd.php">Adicionar Categoria</a></li>
			</ul>
		</li>

		
		<li ><a href="">News</a>
			<ul class="sub-menu">
				<li><a href="../admin/newslist.php">Lista de Notícias</a></li>
				<li><a href="../admin/newsadd.php">Adicionar Notícias</a></li>
			</ul>
		</li>

		<li class="lisair">
			<?php 
		if(!isset($_SESSION['liberado'])){
			echo '<a href="index.php">Logar</a>';
			}else{
			echo '<a href="sair.php">Sair</a>';
		}
	 	?>
		</li>
	</ul><br><br>
