<?php include '../conn.php';

$id = $_GET['id'];

$c = mysqli_query($con,"delete from petugas where id_petugas='$id'");
header('location:petugas.php?alert=berhasil');
?>