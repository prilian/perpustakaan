<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$nb = mysqli_real_escape_string($link,trim($_POST["nomorBuku"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaBuku"]));
$jb = mysqli_real_escape_string($link,trim($_POST["jenisBuku"]));
$penerbit = mysqli_real_escape_string($link,trim($_POST["penerbit"]));
$thn = mysqli_real_escape_string($link,trim($_POST["tahunTerbit"])); 

$query = mysqli_query($link,"UPDATE buku SET nomor_buku='$nb',nama='$nama',jb='$jb',penerbit='$penerbit',tahunTerbit='$thn' WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Buku Berhasil Diperbaharui" );window.location="home.php?p=buku";</script>';
}else{
    echo '<script>alert("Data Buku Gagal Diperbaharui" );window.location="home.php?p=buku&act=add";</script>';
}
?>