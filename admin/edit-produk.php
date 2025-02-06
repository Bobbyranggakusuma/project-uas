<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
include "../koneksi.php";

$id = $_GET['id'];
$result = $koneksi->query("SELECT * FROM produk WHERE id='$id'");
$row = $result->fetch_assoc();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Edit Produk</h2>
            <form action="proses-edit-produk.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?php echo $row['harga']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <img src="../images/produk/<?php echo $row['gambar']; ?>" width="100">
                </div>
                <button type="submit" class="btn btn-primary">Update Produk</button>
            </form>
        </div>
    </div>
</div>

