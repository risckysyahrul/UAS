<?php
session_start();

include "koneksi.php";

$username =mysqli_real_escape_string($kon,$_POST["Nama"]);
$p =mysqli_real_escape_string($kon,$_POST["Password"]);
$pass_md5= md5($password);

$sql = "select * from login where username='".$username."' and password='".$p."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);

	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		
		if($row['level']=="admin"){
			$_SESSION["id"]=$row["id"];
			$_SESSION["nama"]=$row["nama"];
			$_SESSION["username"]=$row["username"];
			$_SESSION["password"]=$row["password"];
			$_SESSION["level"]=$row["level"];
			header("Location:../index/idx_halaman.php");
		
	}else {
		echo "Username atau password salah <br><a href='../main/index.php'>Kembali</a>";
	}
}else{
	echo "Username atau password salah <br><a href='../main/index.php'>Kembali</a>";
}
?>