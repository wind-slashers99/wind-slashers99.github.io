<?php include 'conn.php';

$username = $_POST['username'];
$pass = md5($_POST['password']);
$hak_akses = $_POST['hakakses'];


if ($hak_akses == "admin") {
    $data = mysqli_query($con, "select * from petugas where username='$username' and password='$pass' and level='admin'");
    if (mysqli_num_rows($data) > 0) {
        $d = mysqli_fetch_array($data);
        session_start();
        $_SESSION['id'] = $d['id_petugas'];
        $_SESSION['nama'] = $d['nama_petugas'];
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = $d['level'];

        header('location:admin/');
    } else {
        header('location:login.php?gagal');
    }
} else if ($hak_akses == "petugas") {
    $data = mysqli_query($con, "select * from petugas where username='$username' and password='$pass' and level='petugas'");
    if (mysqli_num_rows($data) > 0) {
        $d = mysqli_fetch_array($data);
        session_start();
        $_SESSION['id'] = $d['id_petugas'];
        $_SESSION['nama'] = $d['nama_petugas'];
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = $d['level'];

        header('location:petugas/');
    } else {
        header('location:login.php?gagal');
    }
} else {
    header('location:login.php?gagal');
}
