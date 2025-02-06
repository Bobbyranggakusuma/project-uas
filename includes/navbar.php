<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fruitshop</title>
  <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="bootstrap/bootstrap/fonts/glyphicons-halflings-regular.svg"/>
  <link rel="stylesheet" href="style.css"/>
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
          <li class="<?= $current_page == 'produk.php' ? 'active' : '' ?>"><a href="produk.php">Products</a></li>
          <li class="<?= $current_page == 'about.php' ? 'active' : '' ?>"><a href="about.php">About Us</a></li>
          <li class="<?= $current_page == 'contacts.php' ? 'active' : '' ?>"><a href="contacts.php">Contact</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" />
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <!-- <a href="#"
                ><span class="glyphicon glyphicon-shopping-cart"></span
              ></a> -->
          </li>
          <li>
          <li class="<?= $current_page == 'login.php' ? 'active' : '' ?>"><a href="admin/login.php">Login</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>