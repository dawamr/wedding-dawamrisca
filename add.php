<?php

include("etc/koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirimucapan'])){

    // ambil data dari formulir
    $pengirim = $_POST['pengirim'];
    $names = $_POST['names'];
    $messages = $_POST['messages'];
    $attending = $_POST['attending'];

    // buat query
    $sql = "INSERT INTO ucapan (pengirim, names, messages, attending) VALUE ('$pengirim', '$names', '$messages', '$attending')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


} else {
    die("Akses dilarang...");
}

?>