<?php
$connect= mysqli_connect("localhost", "root", "", "bayar_zakat_db");
// menyimpan data kedalam variabel
$jenis_zakat                = $_POST['jeniszakat'];
$nominal                    = $_POST['nominal'];
$nama_lengkap               = $_POST['namalengkap'];
$nomor_hp                   = $_POST['nomorhp'];
$email                      = $_POST['email'];
$nama_bank                  = $_POST['namabank'];
$nomor_rekening             = $_POST['nomorrekening'];


// query SQL untuk insert data
$query="INSERT INTO data_pembayar_zakat SET jenis_zakat='$jenis_zakat', nominal='$nominal', 
nama_lengkap='$nama_lengkap', nomor_hp='$nomor_hp', email='$email',  nama_bank='$nama_bank', 
nomor_rekening='$nomor_rekening'";
if (mysqli_query($connect, $query)) {
    echo "<script>alert('Data Pembayaran Zakat Berhasil Dimasukan');document.location='../index/idx_halaman.php'</script>";
}
else {
echo "Gagal Input";
}
?>