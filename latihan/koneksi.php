<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "db_sekolah";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo "Koneksi gagal : ".mysqli_connect_error();
}else{
    echo "Koneksi dengan database Berhasil";
}

?>