<?php
include "koneksi.php";

$Nik        = $_POST['Nik'];
$Nama       = $_POST['Nama'];
$Gender     = $_POST['Gender'];
$Alamat     = $_POST['Alamat'];
$umur       = $_POST['umur'];
$Jurusan    = $_POST['Jurusan'];

mysqli_query($koneksi,"INSERT INTO siswa VALUES('$Nik','$Nama','$Gender','$Alamat','$umur','$Jurusan')");

header("location:index.php");
?>