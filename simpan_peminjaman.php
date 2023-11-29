<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$nj = mysqli_real_escape_string($link,trim($_POST["nomorPinjam"]));
$tgl = mysqli_real_escape_string($link,trim($_POST["tglPinjam"]));
$nb = mysqli_real_escape_string($link,trim($_POST["nomorBuku"]));
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorAnggota"]));
$np = mysqli_real_escape_string($link,trim($_POST["nomorPetugas"])); 

$query = mysqli_query($link,"INSERT INTO peminjaman VALUES('','$nj','$tgl','$nb','$nomor','$np')");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Peminjaman Berhasil Ditambahkan" );window.location="home.php?p=peminjaman";</script>';
}else{
    echo '<script>alert("Data Peminjaman Gagal Ditambahkan" );window.location="home.php?p=peminjaman&act=add";</script>';
}
?>