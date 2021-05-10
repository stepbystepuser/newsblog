<?php
require_once("conect.php");
if (!isset($_SESSION['liberado'])) {
	header("location:../admin/erro.php");
}

 ?>