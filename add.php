<?php

include("etc/koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirimucapan'])){

    // ambil data dari formulir
    $names = $_POST['names'];
    $messages = $_POST['messages'];
    $attending = $_POST['attending'];

    // buat query
    $sql = "INSERT INTO ucapan (names, messages, attending) VALUE ('$names', '$messages', '$attending')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>