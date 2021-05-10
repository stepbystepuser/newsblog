<?php 
require_once("conect.php");
require_once("pode.php");
if ($_SESSION['nivel'] > '1') {
	header("location:erro.php");
}

 ?>