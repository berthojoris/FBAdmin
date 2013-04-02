<?php
date_default_timezone_set("Asia/Jakarta");
//Waktu yg dipakai untuk save ke database - Contoh 2012-05-25 13:20:01
//$waktu = date("Y-m-d H:i:s");
//echo $waktu;

//Waktu yg dipakai untuk dirubah format - Contoh 25-05-2012 01:20:01 PM
$waktu = date("d/m/Y h:i:s A");
echo $waktu;
?>