<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_POST["id"]));
$nomor = mysqli_real_escape_string($link,trim($_POST["nomorAnggota"]));
$nama = mysqli_real_escape_string($link,trim($_POST["namaAnggota"]));
$jk = mysqli_real_escape_string($link,trim($_POST["jenisKelamin"]));
$tgl = mysqli_real_escape_string($link,trim($_POST["tglLahir"]));
$alamat = mysqli_real_escape_string($link,trim($_POST["alamat"])); 

$query = mysqli_query($link,"UPDATE member SET nomor_anggota='$nomor',nama='$nama',jk='$jk',tanggal_lahir='$tgl',alamat='$alamat' WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Anggota Berhasil Diperbaharui" );window.location="home.php?p=anggota";</script>';
}else{
    echo '<script>alert("Data Anggota Gagal Diperbaharui" );window.location="home.php?p=anggota&act=add";</script>';
}
?>