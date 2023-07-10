<?php include'../conn.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telpon = $_POST['telpon'];



    mysqli_query($con,"insert into petugas values('NULL','$nama','$username',md5('$password'),'$telpon','petugas')");

    header('location:petugas.php?alert=berhasil');

?>