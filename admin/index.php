<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilobackend.css">
</head>
<body class="fundo">
	<div id="lateralsup">
	<a href="../index.php">Voltar</a>
	</div>
	<div class="center">
	<h2 class="centraliza">Informe Usuario e Senha para Logar no sistema</h2><br>
	<form action="valida.php" method="POST" autocomplete="off">
		<input type="hidden" autocomplete="false">
		<label for="login">Nome de usuário</label><br>
		<input class="estica" maxlength="100" type="text" name="login" max="30" placeholder="Ex: José da Silva" tabindex="1"><br>
		<label for="pw">Senha do sistema</label><br>
		<input maxlength="100" class="estica" type="password" name="pw" placeholder="Ex: Gks(@:!$sDsA~" tabindex="2"><br>
		<input id="vai" type="submit" name="vai" value="Logar &#10132;" tabindex="3">
	</form>
</div>
</body>
</html>