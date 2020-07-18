<!doctype html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <title>
    </title>
  </head>
  <body>
  <?php 
		$connect= mysqli_connect("localhost", "root", "", "bayar_zakat_db");
		?>  
  <table class="table table-striped table-responsive-md btn-table">
  <thead>
  <tr>
      <th>No</th>
      <th>Jenis Zakat</th>
      <th>Nominal</th>
      <th>Nama Lengkap</th>
      <th>Nomor HP</th>
      <th>Email</th>
      <th>Nama Bank</th>
      <th>Nomor Rekening</th>
    </tr>
</thead>
<?php
            $sql = mysqli_query($connect,"select * from data_pembayar_zakat");
            $no=1;
			while ($d = mysqli_fetch_array($sql)){
			?>  
      <tbody>
      <tr> 
      <td><?php echo $no++;?></td>
				<td><?php echo $d['jenis_zakat']; ?></td>
        <td><?php echo $d['nominal']; ?></td>
				<td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo $d['nomor_hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
        <td><?php echo $d['nama_bank']; ?></td>
				<td><?php echo $d['nomor_rekening']; ?></td>
    <td><button type="button" class="btn btn-primary btn-rounded" ><a class="edit" class="btn btn-link" style="color: #ffffff;" href="../index/idx_halaman.php?nama_lengkap=<?php echo $d['nama_lengkap']; ?>"class="nama_lengkap">Edit</a></button></td>           
    <td><button type="button" class="btn btn-primary btn-rounded" ><a class="hapus" class="btn btn-link" style="color: #ffffff;" href="../proses/proses_hapus.php?nama_lengkap=<?php echo $d['nama_lengkap']; ?>">Hapus</a></button></td>
                </tr>
      <tbody>
      <?php
    }
    ?> 
  </table>
  <button type="button" class="btn btn-primary btn-rounded" ><a class="cetak" class="btn btn-link" style="color: #ffffff;" href="../index/idx_halaman.php?cetak"calss="cetak">Cetak</a></button>
 
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </body>
</html>