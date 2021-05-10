<?php 
$dbname = "newsenac";
//"id9521027_newsenac";
$dbuser =  "root";
//"id9521027_newsenac";
$dbhost = "localhost";
$dbpw = "";

$conexao = new mysqli($dbhost, $dbuser, $dbpw, $dbname);
	if($conexao->connect_errno){
		echo "Conexion failed <br>" . $conexao->connect_error;
	}else{
		if (!isset($_SESSION['liberado'])) {
			session_start();
		//echo "=)";
		//echo "<br>";
		mysqli_set_charset($conexao, "UTF8");
	}

}




