<?php

$server = "localhost";
$user = "wedding";
$password = "wedding";
$nama_database = "wedding";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
