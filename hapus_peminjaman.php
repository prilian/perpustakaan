<?php 
require_once('config.php');
$id = mysqli_real_escape_string($link,trim($_GET["id"]));

$query = mysqli_query($link, "DELETE FROM peminjaman WHERE id='$id'");
        // mysqli_query ada di config, digunakan untuk menampilkan
if($query){
   echo '<script>alert("Data Berhasil Dihapus" );window.location="home.php?p=peminjaman";</script>';
}else{
    echo '<script>alert("Data Gagal Dihapus" );window.location="home.php?p=peminjaman";</script>';
}
?>