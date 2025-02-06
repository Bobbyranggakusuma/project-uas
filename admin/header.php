<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fruitshop</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../bootstrap/bootstrap/fonts/glyphicons-halflings-regular.svg" />
  <link rel="stylesheet" href="../dataTable/datatables.min.css">
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-earphone"></span> +62 828 8778 6778
        </div>
        <div class="col-sm-4 text-center">
          <span class="glyphicon glyphicon-envelope"></span>
          fruitshop@email.com
        </div>
        <div class="col-sm-4 text-right">
          1-2 Hari Pemesanan dan Gratis Pengembalian
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-custom">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Fruitshop</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="<?= $current_page == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
          <li class="<?= $current_page == 'tampil-produk.php' ? 'active' : '' ?>"><a href="tampil-produk.php">Data
              Produk</a></li>
          <li class="<?= $current_page == 'tambah-produk.php' ? 'active' : '' ?>"><a href="tambah-produk.php">Tambah
              Produk</a></li>
          <li class="<?= $current_page == 'blog.php' ? 'active' : '' ?>"><a href="blog.php">Blog</a></li>
          <li class="<?= $current_page == 'contacts.php' ? 'active' : '' ?>"><a href="contacts.php">Contacts</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hallo (
              <?php echo $_SESSION['username'];?> )<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile.php"><span class="glyphicon glyphicon-book"></span> Profile</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="../bootstrap/jquery/dist/jquery.min.js"></script>
  <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>