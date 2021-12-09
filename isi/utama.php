<?php
if(!isset($_SESSION['s_log'])){ ?>

<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-alert"></i> 
		INFORMASI GELOMBANG II</h2>
</div>
<div class="panel-body" align="center">

<h2>SELAMAT DATANG CALON PESERTA DIDIK BARU A-IV SMKN 1 MEJAYAN<br>SILAHKAN DAFTAR PADA MENU DAFTAR</h2>
<hr>
*) Count down dibawah ini adalah contoh apabila PPDB belum dimulai <br>
<?php 
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(date("Y/m/d H:i:s") <= date("2022/04/14 13:30:00")){
	echo '<div id="hitungmundur"></div><br><h4 style="color: red;">*Jika Waktu Melebihi tetapi masih belum muncul Menu Daftar, Harap <i>Refresh</i> Halaman ini / Hubungi Panitia</h4>';
}else if(date("Y/m/d H:i:s") > date("2016/04/14 13:30:00")){
	echo "<h2>SELAMAT DATANG CALON PESERTA DIDIK BARU A-IV SMKN 1 MEJAYAN<br>SILAHKAN DAFTAR PADA MENU DAFTAR</h2>";
}else{
	echo "GAGAL";
}
?>
<script>
Hitung();
function Hitung()
{
tahun = 2022;
bulan = 04;
hari = 14;
jam = 13;
menit = 30;
detik = 00;

setTimeout(function()
{
tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
tglSkrg  = new Date();
tglSkrg  = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
var sisaHari = parseInt((tglTarget-tglSkrg)/86400000);
var sisaJam = parseInt((tglTarget-tglSkrg)/3600000);
var sisaMenit = parseInt((tglTarget-tglSkrg)/60000);
var sisaDetik = parseInt((tglTarget-tglSkrg)/1000);
detik = sisaMenit*60;
detik = sisaDetik-detik;
menit = sisaJam*60;
menit = sisaMenit-menit;
jam = sisaHari*24;
jam = (sisaJam-jam) < 0 ? 0 : sisaJam-jam;
hari = sisaHari;
mulaiHitung(hari,jam, menit,detik,tahun);
}, 1000);
}
function mulaiHitung(hari, jam, menit, detik, tahun){
 document.getElementById("hitungmundur").innerHTML="<h1><font color=red><b>"+hari+" Hari, "+jam+" Jam, "+menit+" Menit, "+detik+" Detik </b></font><br>Menuju PPDB Gelombang II </h1>";
Hitung();
}
</script>

</div></div>


<?php }else{
	//Mencatat Info User saat login
	$user = "";
	if(isset($_SESSION['s_log'])){
		$s_no_siswa = $_SESSION['s_log']['s_no_siswa'];
		$nama = $_SESSION['s_log']['s_nama'];
	} ?>
<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-alert"></i> 
		HALAMAN PENGOLAHAN DATA CALON SISWA BARU</h2>
</div>
<div class="panel-body" align="center">
	<h1>Selamat Datang Calon Siswa Baru SMK Negeri 1 Mejayan.<br>
	Nama : <font color="blue"><?php echo strtoupper($nama); ?></font><br>
	No Pendaftaran : <font color="green">PSB-16-2-<?php echo $s_no_siswa; ?></font></h1>
</div></div>



<?php } ?>