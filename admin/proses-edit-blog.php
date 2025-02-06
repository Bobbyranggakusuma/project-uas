<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $koneksi->real_escape_string($_POST['judul']);
    $konten = $koneksi->real_escape_string($_POST['konten']);

    $query = "UPDATE blog SET judul='$judul', konten='$konten', tanggal=NOW() WHERE id='$id'";
    if ($koneksi->query($query) === TRUE) {
        header("location:tampil-blog.php?pesan=updateBerhasil");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>