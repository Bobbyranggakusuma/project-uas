<?php include 'includes/navbar.php'?>

     <!-- Filter Produk -->
     <div class="container filter-bar">
        <div class="row text-center">
            <div class="col-sm-12">
                <button class="btn btn-success">Seluruh Produk</button>
                <!-- <button class="btn btn-default">Vegetables</button>
                <button class="btn btn-default">Fruits</button>
                <button class="btn btn-default">Juice</button>
                <button class="btn btn-default">Dried</button> -->
            </div>
        </div>
    </div> 
    <!-- Produk -->
<div class="container product-list">
    <div class="row">
        <?php
        include 'koneksi.php';
        $result = $koneksi->query("SELECT * FROM produk");
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-sm-3">
                <div class="product-box">
                    <img src="images/produk/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama']); ?>" class="img-responsive">
                    <h4><?php echo htmlspecialchars($row['nama']); ?></h4>
                    <p>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?>/kg</p>
                    <p class="rating">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                    <div class="product-buttons">
                        <button class="btn btn-info">Buy Now</button>
                        <button class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
        <!-- Pagination -->
        <div class="container text-center">
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    <!-- Footer -->
    <?php include 'includes/footer.php'?>
