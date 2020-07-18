<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </head>
  <body>
  <?php 
  $connect= mysqli_connect("localhost", "root", "", "bayar_zakat_db");
	$nama = $_GET['nama_lengkap'];
  $data = mysqli_query($connect,"SELECT * FROM data_pembayar_zakat WHERE nama_lengkap='$nama'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  <div class="card">
  <div class="card-body">

  <!-- Extended default form grid -->
<form action="../proses/proses_edit_data_bayar_zakat.php" method="post">
<!-- Grid row -->
<div class="form-row">
    <!-- Default select -->
    <div class="form-group col-md-2">
    <label>Jenis Zakat</label>
    <select class="form-control" name="jeniszakat" id="jeniszakat">
    <?php
       $sql_jurusan=mysqli_query($connect,"SELECT * FROM pilih_zakat");
       while ($data_jurusan=mysqli_fetch_array($sql_jurusan)) {
        if ($d['jenis_zakat']==$data_jurusan['id']) {
         $select="selected";
        }else{
         $select="";
        }
        echo "<option $select>".$data_jurusan['jenis_zakat']."</option>";
       }
      ?>
  </select>
  </div>
<div class="form-group hcol-md-1">
    <label>Masukan Nominal Uang</label>
   <input type="text" class="form-control" id="nominal" placeholder="Masukan Nominal Uang" name="nominal" value="<?php echo $d['nominal'] ?>"> 
        </div>
        </div>
   <!-- Grid row -->
   <div class="form-row">
     <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap" value="<?php echo $d['nama_lengkap'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nomor HP</label>
      <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="Masukan Nomor HP" value="<?php echo $d['nomor_hp'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Alamat Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat Email"  value="<?php echo $d['email'] ?>">
    </div>
    </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Transfer Dari Nama Bank</label>
      <input type="text" class="form-control" id="namabank" name="namabank" placeholder="Masukan Nama Bank"  value="<?php echo $d['nama_bank'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nomor Rekening Bank</label>
      <input type="text" class="form-control" id="nomorrekening" name="nomorrekening" placeholder="Masukan Rekening Bank" value="<?php echo $d['nomor_rekening'] ?>">
    </div>
    </div>

  <button type="submit" class="btn btn-primary btn-md" name="submit">Kirim</button>
  <?php } ?>
</form>

<!-- Extended default form grid -->
  </div>
  </div>
        
  </body>
</html>