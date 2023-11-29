<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$np = mysqli_real_escape_string($link,trim($_POST["nomorPetugas"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaPetugas"]));
$jk = mysqli_real_escape_string($link,trim($_POST["jenisKelamin"]));
$username = mysqli_real_escape_string($link,trim($_POST["username"]));
$hp = mysqli_real_escape_string($link,trim($_POST["noHp"])); 

$query = mysqli_query($link,"UPDATE petugas SET nomor_petugas='$np',nama='$nama',jk='$jk',username='$username',no_hp='$hp' WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Petugas Berhasil Diperbaharui" );window.location="home.php?p=petugas";</script>';
}else{
    echo '<script>alert("Data petugas Gagal Diperbaharui" );window.location="home.php?p=petugas&act=add";</script>';
}
?>