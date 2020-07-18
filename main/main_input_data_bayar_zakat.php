<?php
include "../proses/koneksi.php";
?>
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
  <div class="card">
  <div class="card-body">
  <!-- Extended default form grid -->
<form action="../proses/proses_input_data_bayar_zakat.php" method="post">
  <!-- Grid row -->
  <div class="form-row">
    <!-- Default select -->
    <div class="form-group col-md-2">
    <label>Jenis Zakat</label>
    <select class="form-control" name="jeniszakat" id="jeniszakat">
    <option selected> Pilih </option>
    <?php 
        $sql1=mysqli_query( $kon,"SELECT * FROM pilih_zakat"); 
        while($d = mysqli_fetch_array($sql1)){?>
   <option value="<?php echo $d['jenis_zakat'] ?>"><?=$d['jenis_zakat']?></option> 
        <?php } ?>
  </select>
  </div>
  <div class="form-group hcol-md-1">
    <label>Masukan Nominal Uang</label>
   <input type="text" class="form-control" id="nominal" placeholder="Masukan Nominal Uang" name="nominal"> 
        </div>
        </div>
   <!-- Grid row -->
   <div class="form-row">
     <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nomor HP</label>
      <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="Masukan Nomor HP">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Alamat Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat Email">
    </div>
    </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Transfer Dari Nama Bank</label>
      <input type="text" class="form-control" id="namabank" name="namabank" placeholder="Masukan Nama Bank">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nomor Rekening Bank</label>
      <input type="text" class="form-control" id="nomorrekening" name="nomorrekening" placeholder="Masukan Rekening Bank">
    </div>
    </div>

  <button type="submit" class="btn btn-primary btn-md" name="submit">Kirim</button>
</form>

<!-- Extended default form grid -->
  </div>
  </div>
  
  </body>
</html>