<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_GET["id"]));

$query = mysqli_query($link, "DELETE FROM buku WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Buku Berhasil Dihapus" );window.location="home.php?p=buku";</script>';
}else{
    echo '<script>alert("Data Buku Gagal Dihapus" );window.location="home.php?p=buku";</script>';
}
?>