<?php
	include "fb-init.php";
	session_destroy();
	unset($_SESSION['accessToken']);
	header("location:index.php");
?>