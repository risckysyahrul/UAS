<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <center><h5>Data Pembayaran Zakat</h5></center>    
    <center><?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Per ".date("d M Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo " ". $jam." "."</b>";
?></center> <br>
	<table border="1" style="width: 100%">
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
    <?php
  $connect= mysqli_connect("localhost", "root", "", "bayar_zakat_db");  
            $sql = mysqli_query($connect,"select * from data_pembayar_zakat");
            $no=1;
			while($d = mysqli_fetch_array($sql)){
			?>
		<tr>
        <td><?php echo $no++; ?></td>
				<td><?php echo $d['jenis_zakat']; ?></td>
        <td><?php echo $d['nominal']; ?></td>
				<td><?php echo $d['nama_lengkap']; ?></td>
        <td><?php echo $d['nomor_hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
        <td><?php echo $d['nama_bank']; ?></td>
				<td><?php echo $d['nomor_rekening']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
	<script>
		window.print();
	</script>
 
</body>
</html>