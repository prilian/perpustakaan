<?php 
require_once('config.php');
$nb = mysqli_real_escape_string($link,trim($_POST["nomorBuku"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaBuku"]));
$jb = mysqli_real_escape_string($link,trim($_POST["jenisBuku"]));
$penerbit = mysqli_real_escape_string($link,trim($_POST["penerbit"]));
$thn = mysqli_real_escape_string($link,trim($_POST["tahunTerbit"])); 

$query = mysqli_query($link,"INSERT INTO buku VALUES('','$nb','$nama','$jb','$penerbit','$thn')");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Buku Berhasil Ditambahkan" );window.location="home.php?p=buku";</script>';
}else{
    echo '<script>alert("Data Buku Gagal Ditambahkan" );window.location="home.php?p=buku&act=buku";</script>';
}
?>