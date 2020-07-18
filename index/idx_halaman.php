<?php
include_once "../main/main_header.php";

if (isset ($_GET["bayar"])){
    include "../main/main_input_data_bayar_zakat.php";
    include "../main/main_footer.php";
}
else if (isset ($_GET["zakat"])){
    include "../main/main_data_bayar_zakat.php";
    include "../main/main_footer.php";
}
else if (isset ($_GET["cetak"])){
    include "../main/main_cetak_zakat.php";
    include "../main/main_footer.php";
}
else if (isset ($_GET["nama_lengkap"])){
    include "../main/main_edit_zakat.php";
    include "../main/main_footer.php";
}
else {
    include_once "../main/main_rumah.php";
    include_once "../main/main_footer.php";
}

?>