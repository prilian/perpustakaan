<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$nj = mysqli_real_escape_string($link,trim($_POST["nomorPinjam"]));
$tgl = mysqli_real_escape_string($link,trim($_POST["tglPinjam"]));
$nb = mysqli_real_escape_string($link,trim($_POST["nomorBuku"]));
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorAnggota"]));
$np = mysqli_real_escape_string($link,trim($_POST["nomorPetugas"])); 

$query = mysqli_query($link,"UPDATE peminjaman SET nomor_pinjam='$nj',tanggal_pinjam='$tgl',nomor_buku='$nb',nomor_anggota='$nomor',nomor_petugas='$np' WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Peminjaman Berhasil Diperbaharui" );window.location="home.php?p=peminjaman";</script>';
}else{
    echo '<script>alert("Data Peminjaman Gagal Diperbaharui" );window.location="home.php?p=peminjaman&act=add";</script>';
}
?>