<?php
session_start();
	$logout = $_POST["checkLogout"];
	echo $logout;
	session_destroy();
?>