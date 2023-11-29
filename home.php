<?php
session_start();
require_once "config.php";
if(empty($_SESSION['nama'])){
  echo '<script>window.location="index.php";</script>';
 }
include "template/header.php";
include "template/sidebar.php";
isset($_GET["p"])?$page=mysqli_real_escape_string($link,trim($_GET["p"])):'';
                      //membuang kode tidak berguna//
isset($_GET["act"])?$act=mysqli_real_escape_string($link,trim($_GET["act"])):'';
if($page=='anggota'){
  if($act=='add'){
    include 'tambah_anggota.php';
  }else if($act=='edit'){
    include 'edit_anggota.php';
  }else{
    include 'anggota.php';
  }
}else if($page=='petugas'){
  if($act=='add'){
    include 'tambah_petugas.php';
  }else if($act=='edit'){
    include 'edit_petugas.php';
  }else{
    include 'petugas.php';
  }
}else if($page=='buku'){
  if($act=='add'){
    include 'tambah_buku.php';
  }else if($act=='edit'){
    include 'edit_buku.php';
  }else{
    include 'buku.php';
  }
}else if($page=='peminjaman'){
  if($act=='add'){
    include 'tambah_peminjaman.php';
  }else if($act=='edit'){
    include 'edit_peminjaman.php';
  }else{
    include 'peminjaman.php';
  }
}else if($page=='pengembalian'){
  if($act=='add'){
    include 'tambah_pengembalian.php';
  }else if($act=='edit'){
    include 'edit_pengembalian.php';
  }else{
    include 'pengembalian.php';
  }
}

include "template/footer.php";
?>