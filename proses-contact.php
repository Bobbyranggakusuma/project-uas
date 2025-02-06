<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "koneksi.php";

    // Mengambil data dari formulir
    $name = $koneksi->real_escape_string($_POST['name']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $message = $koneksi->real_escape_string($_POST['message']);

    // Menyimpan data ke tabel contacts
    $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($koneksi->query($query) === TRUE) {
        // Redirect ke halaman kontak dengan pesan sukses
        header("location:contacts.php?pesan=success");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
} else {
    // Jika bukan metode POST, redirect ke halaman kontak
    header("location:contacts.php");
}
?>