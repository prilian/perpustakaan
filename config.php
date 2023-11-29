<?php
error_reporting(0);
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'perpus');

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($link === false){
    die("Error: koneksi gagal. ".mysqli_connect_error());
}
?>