<?php
session_start();
include'connect.php';
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];

	$sql = "SELECT * FROM list_course_pro WHERE id_user = $id";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) == 1) {
		echo "true";
	} else {
		echo "false";
	}
}
?>
