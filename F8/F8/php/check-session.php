<?php
session_start();
	if (isset($_SESSION['acount'])) {
		echo "logged";
	} else {
		echo "notlogin";
	}
?>