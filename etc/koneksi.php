<?php

$server = "localhost";
$user = "sendi";
$password = "sendi";
$nama_database = "weddingsendi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
