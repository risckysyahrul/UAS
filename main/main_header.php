<?php
session_start();

include "../proses/koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='../index.php'>Klik disini</a>";
	exit;
}


$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../img/1.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
    <title>Pembayaran Zakat</title>
  </head>
  <body>
 
  <nav class="navbar navbar-light" style="background-color: #043264;">
  <nav class="navbar navbar-dark primary-color">
  <a class="navbar-brand" href="#">
    <img src="../img/1.png" height="30" alt="logo">
  </a>
  <a class="navbar-brand" href="../index?idx_halaman_awal_user.php">Pembayaran Zakat</a>
    </nav>
    </nav>
  <nav class="navbar navbar-expand-lg" style="background-color: #043264;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" class="btn btn-link" style="color: #ffffff;" href="../index/idx_halaman.php"class="rumah">Rumah</a>
      <a class="nav-item nav-link" class="btn btn-link" style="color: #ffffff;" href="../index/idx_halaman.php?zakat"Class="zakat">Data</a>
      <a class="nav-item nav-link" class="btn btn-link" style="color: #ffffff;" href="../proses/proses_logout.php">Logout</a>
    </div>
      <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-item nav-link" class="btn btn-link" style="color: #ffffff;" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user" ></i> Selamat Datang <?php echo $username; ?> <?php echo $nama; ?> </a>
      </li>
    </ul>
    </div>
    </nav>
  </body>
</html>