<?php 
session_start();
include 'config/koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3mUfvWB7dGwdyynSmZodXP9BOcepvIeL";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta content='noindex' name='robots'/>
<meta content='nofollow' name='robots'/> 


	<title>Penjaringan Siswa Baru SMK Negeri 1 Mejayan T/A 2016/2017 Gelombang 2</title>
	<link rel="shortcut icon" href="asset/img/smk.png">
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<link href="asset/awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="asset/css/themes/smoothness/jquery.ui.css">
<link rel="stylesheet" type="text/css" href="asset/css/themes/smoothness/theme.css">


<script type="text/javascript" src="asset/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery-ui.js"></script>

<script type="text/javascript">
	$(function(){
		$("#tanggal").datepicker({
			changeMonth : true,
			changeYear : true,
			yearRange : '-25:+1'
		});
	});
</script>


<script type="text/javascript">
    $(function() {
	    $("#datatable").dataTable();
    });
</script>

<style type="text/css">
	body{
		font-family: Arial;
	}
	#header{
		width: 900px;
		height: 170px;
	}
	.pengumuman1{
		color: red;
		font-weight: bold;
		font-size: 14px;
	}
	.pengumuman2{
		color: red;
		font-weight: bold;
		font-size: 14px;
	}
	.navbar-inverse{
		background-color: #001EC7;
		color: white;

	}
	.dropdown:hover .dropdown-menu {
    display: block;
	}
</style>
</head>
<body>
<div class="container">

	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse"
					 	data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Menu
					 	</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
					 	</span></button> <a class="navbar-brand" href="index.php"><font color="white"><b><i class="fa fa-home fa-fw"></i> HOME</b></font></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php include 'menu.php';?>
				</div>
			</nav>
		</div>
	</div>


<div class="clearfix"></div>
<br><hr>

<div class="row">
<div class="col-md-12">
	<center><img id="header" src="asset/img/2Header.png" class="img-responsive"></center>
</div>	
</div>


<div class="row">
<div class="col-sm-12">
<table width="100%" class="table table-hover">
	<tr>
		<td width="10%" class="pengumuman1"><i class="fa fa-bullhorn"></i> INFO : </td>
		<td width="90%" class="pengumuman2"><marquee><?php $queryjalan = mysqli_query($koneksi, "select * from info where untuk='jalan'") or die("GAGAL ".mysqli_error($koneksi)); while($jalan = mysqli_fetch_array($queryjalan)){ echo strtoupper($jalan['isi']); } ?></marquee></td>
	</tr>

</table>
<hr>
<!-- <div id="hitungmundur"></div> -->
<script>
Hitung();
function Hitung()
{
tahun = 2016;
bulan = 04;
hari = 18;
jam = 08;
menit = 00;
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
 document.getElementById("hitungmundur").innerHTML="<center><h1><font color=red><b>"+hari+" Hari, "+jam+" Jam, "+menit+" Menit, "+detik+" Detik </b></font><br>Menuju PPDB Gelombang II </h1></center>";
Hitung();
}
</script>
<hr>

<?php
$hal = $_GET['halaman'];
if($hal == 'Utama'){
	require_once 'isi/utama.php';
}else if($hal == 'Daftar'){
	require_once 'isi/daftar.php';
}else if($hal == 'Alur-Pendaftaran'){
	require_once 'isi/alur.php';
}else if($hal == 'Berhasil-Daftar'){
	require_once 'isi/bdaftar.php';
}else if($hal == 'Profil-Sekolah'){
	require_once 'isi/sekolah.php';
}else if($hal == 'Login'){
	require_once 'isi/login.php';

}else if($hal == 'Edit-Data'){
	require_once 'isi/edit-data.php';
}else if($hal == 'Edit-Kesehatan'){
	require_once 'isi/edit-kesehatan.php';
}else if($hal == 'Edit-Nilai'){
	require_once 'isi/edit-nilai.php';
}
else if($hal == 'Profil'){
	require_once 'isi/profil.php';
}else if($hal == 'Kirim-Pesan'){
	require_once 'isi/pesan.php';
}

else{ ?>
	<script>
		window.location.href = "index.php?halaman=Utama";
		</script>
<?php }

?>




</div>
</div>


<br>
<div class="row">
<div class="col-sm-12" align="center">
	&copy; 2016 - Dev Website Penjaringan Siswa Baru <a href="http://fb.com/smkn1mejayan" target="_blank">SMKN 1 Mejayan 2016/2017</a><br>
	<i class="fa fa-user"></i> <a href="http://fb.com/FebroHerdyantoAlmura" target="_blank">Febro Herdyanto</a> & Team - Komptensi Keahlian : <a href="http://faceboook.com/groups/rplsmkn1mejayan" target="_blank">Rekayasa Perangkat Lunak</a>
</div>
</div>



</div> <!-- ./container -->


</body>
</html>