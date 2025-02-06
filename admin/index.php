<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Dasboard admin Fruitshop </p>
						<p><a class="btn btn-warning btn-lg" href="tampil-produk.php" role="button">Data Produk</a>
						<a class="btn btn-primary btn-lg" href="profile.php"role="button">Profile</a></p>
				</div>
      </div>
		</div>
</div>
<?php include "footer.php"; ?>