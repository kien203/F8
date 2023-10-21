<script type="text/javascript">
	alert("Đổi thông tin thành công");
	window.location.href = "../page_user.php";
</script>
<?php
include'connect.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username_new"];
}

$acount = $_SESSION['acount'];
$pass = $_SESSION['pass'];
$sql = "UPDATE acount SET username = '$username' WHERE acount = '$acount' AND password = '$pass' ";
$result = $conn->query($sql);
?>



