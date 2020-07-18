<?php
$connect= mysqli_connect("localhost", "root", "", "bayar_zakat_db");
// menyimpan data id kedalam variabel
$nama   = $_GET['nama_lengkap'];
// query SQL untuk insert data
$query="DELETE from data_pembayar_zakat where nama_lengkap='$nama'";
mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data Berhasil Dihapus');document.location='../index/idx_halaman.php'</script>";
?>