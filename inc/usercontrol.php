<?php 
require_once("conect.php");
require_once("pode.php");
if ($_SESSION['nivel'] != '0') {
	header("location:erro.php");
}

 ?>