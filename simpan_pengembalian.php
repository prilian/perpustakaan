<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$nkem = mysqli_real_escape_string($link,trim($_POST["nomorKembali"]));
$tgl = mysqli_real_escape_string($link,trim($_POST["tglKembali"]));
$nj = mysqli_real_escape_string($link,trim($_POST["nomorPinjam"]));
$nb = mysqli_real_escape_string($link,trim($_POST["nomorBuku"]));
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorAnggota"]));
$np = mysqli_real_escape_string($link,trim($_POST["nomorPetugas"])); 

$query = mysqli_query($link,"INSERT INTO pengembalian VALUES('','$nkem','$tgl','$nj','$nb','$nomor','$np')");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Pengembalian Berhasil Ditambahkan" );window.location="home.php?p=pengembalian";</script>';
}else{
    echo '<script>alert("Data Pengembalian Gagal Ditambahkan" );window.location="home.php?p=pengembalian&act=add";</script>';
}
?>