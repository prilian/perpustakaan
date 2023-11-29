<?php
require_once("config.php");
session_start();
$username = mysqli_real_escape_string($link,trim($_POST["username"]));
$password = mysqli_real_escape_string($link,trim($_POST["password"]));

if(!empty($username) && !empty($password)){
    // username dan password diisi
    $sql = "SELECT nama,password FROM pengguna WHERE username='$username'";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) === 1){
        //data ada
        list($nama,$hashed_password)=mysqli_fetch_array($result);
        if(password_verify($password,$hashed_password)){
            $_SESSION['nama'] = $nama;
            //username dan password cocok
            echo "<script>alert('Login Berhasil !');window.location.href='home.php';</script>";    
        }else{
            //password salah
            echo "<script>alert('Password Tidak Cocok !');window.location.href='index.php';</script>";    
        }
    }else{
        //data tidak ada
        echo "<script>alert('Username Tidak Ditemukan !');window.location.href='index.php';</script>";    
    }
}else{
    // username dan password kosong
    echo "<script>alert('Username/Password Tidak Boleh Kosong !');window.location.href='index.php';</script>";
}
?>