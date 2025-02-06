<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM blog WHERE id='$id'";

if ($koneksi->query($query) === TRUE) {
    header("location:blog.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}
?>