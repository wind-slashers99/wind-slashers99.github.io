<?php

include '../conn.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$pwd = $_POST['password'];
$telpon = $_POST['telpon'];

// cek gambar
$rand = rand();
$allow = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($pwd == "" && $filename = "") {
    mysqli_query($con, "UPDATE petugas SET nama_petugas='$nama',username='$username',telp='$telpon' WHERE id_petugas='$id'");
} elseif ($pwd == "") {
    if (!in_array($ext, $allow)) {
        header("location: profil.php?alert=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../pict/' . $rand . '_' . $filename);
        $x = $rand . "_" . $filename;
        mysqli_query($con, "UPDATE petugas set nama_petugas ='$nama',username='$username',telp='$telpon', foto='$x' where id_petugas='$id'");
        header("location: profil.php?alert=berhasil");
    }
} else if ($filename == "") {
    mysqli_query($con, "UPDATE petugas SET nama_petugas='$nama',username='$username',password='$password',telp='$telpon' WHERE id_petugas='$id'");
    header("location: profil.php?alert=berhasil");
}
