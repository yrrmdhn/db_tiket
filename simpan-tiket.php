<?php
include 'db.php';

$kodeTiket = $_POST['kodeTiket'];
$kodePesawat = $_POST['kodePesawat'];
$namaPembeli = $_POST['namaPembeli'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tglBerangkat = $_POST['tglBerangkat'];
$waktuBerangkat = $_POST['waktuBerangkat'];
$waktuSampai = $_POST['waktuSampai'];
$harga = $_POST['harga'];
$noKursi = $_POST['noKursi'];
$kelas = $_POST['kelas'];
$total = $harga;

$q= mysql_query("insert into tiket values(NULL, '$kodeTiket', '$kodePesawat',
'$namaPembeli', '$berangkat', '$tujuan', '$tglBerangkat', '$waktuBerangkat',
 '$waktuSampai', '$harga', '$noKursi', '$kelas', '$total')");
if($q){

    $p = mysql_query("insert into transaksi values(NULL, '$kodeTiket',
    '$total')");
    if($p){
    echo say("Berhasil", "index.php?act=data-tiket");
}
}
?>