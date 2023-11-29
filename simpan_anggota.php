<?php 
require_once('config.php');
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorAnggota"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaAnggota"]));
$jk = mysqli_real_escape_string($link,trim($_POST["jenisKelamin"]));
$tgl = mysqli_real_escape_string($link,trim($_POST["tglLahir"]));
$alamat = mysqli_real_escape_string($link,trim($_POST["alamat"])); 

$query = mysqli_query($link,"INSERT INTO member VALUES('','$nama','$nomor','$jk','$tgl','$alamat')");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Anggota Berhasil Ditambahkan" );window.location="home.php?p=anggota";</script>';
}else{
    echo '<script>alert("Data Anggota Gagal Ditambahkan" );window.location="home.php?p=anggota&act=add";</script>';
}
?>