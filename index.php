<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<?php session_start(); ?>
<?php include "includes/navbar.php" ?>
<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/carousel/carousel-1.jpg" alt="..." />
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="images/carousel/carousel-2.jpg" alt="..." />
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="images/carousel/carousel-3.jpg" alt="..." />
      <div class="carousel-caption"></div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- carousel end  -->

<!-- Informasi Layanan -->
<div class="container service-info">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="service-box">
        <span class="glyphicon glyphicon-plane"></span>
        <h4>Free Shipping</h4>
        <p>Gratis Biaya Pengiriman Sampai Kerumah Anda</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="service-box">
        <span class="glyphicon glyphicon-headphones"></span>
        <h4>Online Support</h4>
        <p>24/7 Customer Service</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="service-box">
        <span class="glyphicon glyphicon-lock"></span>
        <h4>Secure Payment</h4>
        <p>Pembayaran yang Aman</p>
      </div>
    </div>
  </div>
</div>
<!-- Kategori Produk -->
<div class="container product-categories">
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="category-box">
        <span class="glyphicon glyphicon-apple"></span>
        <h5>All Fruits</h5>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="category-box">
        <span class="glyphicon glyphicon-apple"></span>
        <h5>Citrus Fruits</h5>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="category-box">
        <span class="glyphicon glyphicon-apple"></span>
        <h5>Berries</h5>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="category-box">
        <span class="glyphicon glyphicon-apple"></span>
        <h5>Tropical Fruits</h5>
      </div>
    </div>
  </div>
</div>

<!-- Produk -->
<div class="container product-list">
  <div class="row">
    <div class="col-sm-3">
      <div class="product-box">
        <img src="images/produk/anggur.jpg" alt="anggur" class="img-responsive" />
        <h4>anggur</h4>
        <p>Rp 60.000/kg</p>
        <p class="rating">
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
        </p>
        <div class="product-buttons">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-box">
        <img src="images/produk/apel.jpg" alt="Product 2" class="img-responsive" />
        <h4>Apel</h4>
        <p>Rp 45.000/kg</p>
        <p class="rating">
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
        </p>
        <div class="product-buttons">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-box">
        <img src="images/produk/bluberry.jpg" alt="Product 3" class="img-responsive" />
        <h4>Blueberry</h4>
        <p>Rp 125.000/kg</p>
        <p class="rating">
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
        </p>
        <div class="product-buttons">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="product-box">
        <img src="images/produk/ceri.jpg" alt="Product 4" class="img-responsive" />
        <h4>Cery</h4>
        <p>Rp 95.000/kg</p>
        <p class="rating">
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
        </p>
        <div class="product-buttons">
          <button class="btn btn-primary">Buy Now</button>
          <button class="btn btn-success">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="container about-section" id="about">
  <div class="row">
    <div class="col-sm-6">
      <img src="images/carousel/carousel-2.jpg" alt="About Image" class="img-responsive" />
    </div>
    <div class="col-sm-6">
      <h2>Selamat Datang di Fruitshop</h2>
      <h3>Toko Buah Terbaik</h3>
      <p>
        Kami menyediakan berbagai macam buah segar yang langsung diambil
        dari kebun. Buah-buahan kami dipetik pada saat yang tepat untuk
        memastikan kesegaran dan kualitas terbaik.
      </p>
      <p>
        Dengan layanan pengiriman cepat dan dukungan pelanggan 24/7, kami
        berkomitmen untuk memberikan pengalaman belanja yang menyenangkan
        dan memuaskan. Cobalah produk kami dan rasakan perbedaannya!
      </p>
      <a href="#" class="btn btn-success">Belanja Sekarang</a>
    </div>
  </div>
</div>

<!-- Testimoni Pelanggan -->
<div class="container testimonial-section">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2>Testimoni Pelanggan</h2>
    </div>
    <div class="col-sm-4">
      <div class="testimonial-box">
        <p>
          "Buah-buahan di Fruitshop sangat segar dan berkualitas. Saya
          sangat puas dengan layanan mereka!"
        </p>
        <h4>- Andi</h4>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="testimonial-box">
        <p>
          "Pengiriman cepat dan buah-buahannya sangat segar. Saya pasti akan
          berbelanja lagi di sini."
        </p>
        <h4>- Budi</h4>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="testimonial-box">
        <p>
          "Layanan pelanggan yang sangat baik dan produk yang luar biasa.
          Sangat direkomendasikan!"
        </p>
        <h4>- Siti</h4>
      </div>
    </div>
  </div>
</div>

<!-- Blog Terbaru -->
<div class="container blog-section">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2>Blog Terbaru</h2>
    </div>
    <?php
        include "koneksi.php";
        $result = $koneksi->query("SELECT * FROM blog ORDER BY tanggal /*DESC LIMIT 3*/");
        while ($row = $result->fetch_assoc()) {
        ?>
    <div class="col-sm-4">
      <div class="blog-box">
        <img src="images/blog/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>"
          class="img-responsive" />
        <h4>
          <?php echo $row['judul']; ?>
        </h4>
        <p>
          <?php echo substr($row['konten'], 0, 100); ?>...
        </p>
        <a href="#" class="btn btn-default">Baca Selengkapnya</a>
      </div>
    </div>
    <?php
        }
        ?>
  </div>
</div>

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
          <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan Anda"
            required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Kirim</button>
      </form>
    </div>
  </div>
</div>
<?php include 'includes/footer.php' ?>