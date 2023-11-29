<?php 
require_once('config.php');
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorPetugas"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaPetugas"]));
$jk = mysqli_real_escape_string($link,trim($_POST["jenisKelamin"]));
$username = mysqli_real_escape_string($link,trim($_POST["username"]));
$hp = mysqli_real_escape_string($link,trim($_POST["noHp"])); 

$query = mysqli_query($link,"INSERT INTO petugas VALUES('','$nama','$nomor','$jk','$username','$hp')");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Petugas Berhasil Ditambahkan" );window.location="home.php?p=petugas";</script>';
}else{
    echo '<script>alert("Data Petugas Gagal Ditambahkan" );window.location="home.php?p=petugas&act=add";</script>';
}
?>