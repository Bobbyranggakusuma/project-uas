<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM produk WHERE id='$id'";

if ($koneksi->query($query) === TRUE) {
    header("location:tampil-produk.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}
?>