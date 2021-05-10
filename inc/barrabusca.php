<Header>
		<div id="search">
			<form class="formbusca" action="newResult.php" method="get" autocomplete="off">
				<input type="hidden" autocomplete="false">
				<input class="iguala" maxlength="100" type="text" name="busca" id="form_busca" placeholder="Buscar">
				<input class="iguala" id="but" type="submit" value="&#128269;" name="buscar">
				
			</form>
		</div>
		<a href="index.php"><div class="logo"><img id="logoimg" src="image/senacnews.jpeg"></div></a>
	</Header>
		<div class="menuicon">
			<input type="checkbox" id="check">
			<label id="icone" for="check"><img src="inc/icone.png"></label>
			<div class="menu">
				<?php include "inc/menufe.php"; ?>
			</div>
		</div>