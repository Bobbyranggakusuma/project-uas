<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
?>

<div class="container">
    <h2>Daftar Pesan Kontak</h2>
    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'deleteBerhasil') {
        echo "<div class='alert alert-success'>Pesan berhasil dihapus.</div>";
    }
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'success') {
        echo "<div class='alert alert-success'>Pesan berhasil dikirim.</div>";
    }
    ?>
    <table id="contactsTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $result = $koneksi->query("SELECT * FROM contacts ORDER BY tanggal DESC");
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
                        <a href="hapus-contact.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin menghapus data?')">
                            <button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#contactsTable').DataTable();
    });
</script>

<?php include "footer.php"; ?>