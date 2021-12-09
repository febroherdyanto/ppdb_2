<?php 

// Detect Browser
$browser = $_SERVER['HTTP_USER_AGENT'];
;

date_default_timezone_set('Asia/Jakarta');

// Ambil Informasi Yang diperlukan dari Pengunjung
$ipaddress = $_SERVER['REMOTE_ADDR']."";
$tanggal = date('Y/m/d');
$jam = date('H:i:s');
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$kunjungan = 1;
// Daftarkan Kedalam Session Lalu Simpan Ke Database
if (!isset($_SESSION['visitor'])){
$_SESSION['visitor']=$ipaddress;
mysqli_query($koneksi,"INSERT INTO visitor (tanggal,jam,ip,counter,browser,url) VALUES ('$tanggal','$jam','$ipaddress','$kunjungan','$browser','$url')") or die("GAGAL".mysqli_error($koneksi));
} 
// Hitung Jumlah Visitor
$kemarin 	= date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
$hari_ini 	= mysqli_fetch_array(mysqli_query($koneksi,'SELECT sum(counter) AS hari_ini FROM visitor WHERE tanggal="'.date("Y-m-d").'"'));
$kemarin	= mysqli_fetch_array(mysqli_query($koneksi,'SELECT sum(counter) AS kemarin FROM visitor WHERE tanggal="'.$kemarin.'"'));
$sql = mysqli_fetch_array(mysqli_query($koneksi,'SELECT sum(counter) as total FROM visitor'));
?>
