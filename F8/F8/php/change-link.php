<?php
session_start();
include'connect.php';
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];

	$data = "SELECT name_course FROM course_registed WHERE id_user = $id";
	$result = $conn->query($data);
	if ($result->num_rows > 0) {
		$name = array();
		while ($row = $result->fetch_assoc()) {
			$name[] = $row['name_course'];
		}
		foreach ($name as $name) {
	        echo $name . "<br>";
	    }
	}
}
?>
