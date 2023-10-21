<?php
include 'connect.php';
session_start();
	$name = $_POST["name_course"];
	$id = $_SESSION['id'];

	// $check = "SELECT * FROM info_course WHERE name = '$name' ";
	// $resultCheck = $conn->query($check);
	// if (mysqli_num_rows($resultCheck) == 1) {
	// 	$row = $resultCheck->fetch_assoc();
 //    	$id_courses = $row["ID"];
	// }
	// echo "$id_course";

	$sql = "INSERT INTO `course_registed` (`id_user`, `name_course`) VALUES ('$id', '$name')";
	$result = $conn->query($sql);
	echo "$name";

?>