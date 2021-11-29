<?php
include "koneksi.php";
$Nik = $_GET['Nik'];
mysqli_query($koneksi,"DELETE FROM siswa WHERE Nik='$Nik'");
header("location:index.php");
?>