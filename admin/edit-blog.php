<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
include "../koneksi.php";

$id = $_GET['id'];
$result = $koneksi->query("SELECT * FROM blog WHERE id='$id'");
$row = $result->fetch_assoc();
?>

<div class="container">
    <h2>Edit Blog</h2>
    <form action="proses-edit-blog.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea name="konten" class="form-control" id="editor" rows="10" required><?php echo $row['konten']; ?></textarea>        </div>
        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>
<script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<?php include "footer.php"; ?>