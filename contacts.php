<?php include 'includes/navbar.php'?>

    <!-- Kontak Kami -->
    <div class="container contact-section">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Kontak Kami</h2>
            </div>
            <div class="col-sm-6">
                <h4>Alamat</h4>
                <p>Jl. Buah Segar No. 123, Jakarta, Indonesia</p>
                <h4>Email</h4>
                <p>info@fruitshop.com</p>
                <h4>Telepon</h4>
                <p>+62 21 12345678</p>
            </div>
            <div class="col-sm-6">
                <h4>Formulir Kontak</h4>
                <?php
                if (isset($_GET['pesan']) && $_GET['pesan'] == 'success') {
                    echo "<div class='alert alert-success'>Pesan Anda berhasil dikirim!</div>";
                }
                ?>
                <form action="proses-contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="boostrap/jquery/dist/jquery.min.js"></script>
    <script src="boostrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>