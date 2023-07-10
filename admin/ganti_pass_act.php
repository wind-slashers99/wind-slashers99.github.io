<?php include '../conn.php';

session_start();
$id = $_SESSION['id'];
$pass = $_POST['password'];

$c = mysqli_query($con,"update petugas set password=md5('$pass') where id_petugas='$id'");
header('location:logout.php');
?>