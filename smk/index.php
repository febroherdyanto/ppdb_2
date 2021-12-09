<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>PPDB SMKN 1 Mejayan</title>

<!--
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
-->
<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="../asset/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="../asset/css/themes/smoothness/jquery.ui.css">
<link rel="stylesheet" type="text/css" href="../asset/css/themes/smoothness/theme.css">
<link rel="stylesheet" type="text/css" href="../asset/ckeditor/contents.css"/>


<script type="text/javascript" src="../asset/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../asset/js/jquery-ui.js"></script>
<script type="text/javascript" src="../asset/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../asset/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="../asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
            $(function() {
                $("#datatable").dataTable();
            });
</script>
<script type="text/javascript">
	$(function(){
		$("#tanggal").datepicker({
			changeMonth : true,
			changeYear : true
		});
	});
</script>
<style type="text/css">
	body{
		font-family: Arial;
	}
</style>
</head>
<body>
<?php
include '../config/koneksi.php';

if(!isset($_SESSION['psbsmk'])){
	echo "<script>document.location.href='login.php';</script>";
}else{
	//Mencatat Info User saat login
	$user = "";
	if(isset($_SESSION['psbsmk'])){
		$kode_user = $_SESSION['psbsmk']['kode_user'];
		$nama = $_SESSION['psbsmk']['nama'];
		$level = $_SESSION['psbsmk']['level'];
	}
?>

<style type="text/css">
	.navbar-inverse{
		background-color: blue;
		color: #00bfff;

	}
</style>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse"
					 	data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Menu
					 	</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
					 	</span></button> <a class="navbar-brand" href="Halaman-Utama"><font color="white"><b><i class="fa fa-home fa-fw"></i> HOME</b></font></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php include 'menu.php'; ?>
				</div>
			</nav>
		</div>
	</div>

<hr>


<div class="panel panel-default table-responsive">
	<div class="panel-heading" align="center">
		<b>HALAMAN ADMIN PSB SMKN 1 MEJAYAN</b>
	</div>

	<div class="panel-body" align="center">
	<?php
	if($_GET['halaman'] == 'Awal'){
		require 'utama.php';
	}else if($_GET['halaman'] == 'Data-Siswa'){
		require 'isi/datasiswa.php';
	}else if($_GET['halaman'] == 'Tambah-Siswa'){
		require 'isi/tambahsiswa.php';
	}else if($_GET['halaman'] == 'Edit-Siswa'){
		require 'isi/editsiswa.php';
	}


	else if($_GET['halaman'] == 'TO'){
		require 'isi/to.php';
	}else if($_GET['halaman'] == 'RPL'){
		require 'isi/rpl.php';
	}else if($_GET['halaman'] == 'TPHP'){
		require 'isi/tphp.php';
	}else if($_GET['halaman'] == 'TSM'){
		require 'isi/tkr.php';
        }


	else if($_GET['halaman'] == 'Cetak-Daftar-Siswa'){
		require 'isi/daftar-siswa.php';
	}



	else if($_GET['halaman'] == 'Nilai-TO'){
		require 'isi/nilai-to.php';
	}else if($_GET['halaman'] == 'Nilai-RPL'){
		require 'isi/nilai-rpl.php';
	}else if($_GET['halaman'] == 'Nilai-TPHP'){
		require 'isi/nilai-tphp.php';
	}else if($_GET['halaman'] == 'Nilai-TSM'){
		require 'isi/nilai-tkr.php';
	}



	else if($_GET['halaman'] == 'Terima-TO'){
		require 'isi/terima-to.php';
	}else if($_GET['halaman'] == 'Terima-RPL'){
		require 'isi/terima-rpl.php';
	}else if($_GET['halaman'] == 'Terima-TPHP'){
		require 'isi/terima-tphp.php';
	}else if($_GET['halaman'] == 'Terima-TSM'){
		require 'isi/terima-tkr.php';
	}

	else if($_GET['halaman'] == 'Informasi'){
		require 'isi/info.php';
	}

	else if($_GET['halaman'] == 'Ruang'){
		require 'isi/ruang.php';
	}

	else if($_GET['halaman'] == 'Export-Excel'){
		require 'isi/export-excel.php';
	}else if($_GET['halaman'] == 'Tryout-Tertinggi'){
		require 'isi/daftar_tryout.php';
	}

	else if($_GET['halaman'] == 'Nilai'){
		require 'isi/nilai.php';
	}else if($_GET['halaman'] == 'Edit-Nilai'){
		require 'isi/editnilai.php';
	}

	else if($_GET['halaman'] == 'Cetak-Kartu'){
		require 'isi/cetak.php';
	}

	else{
		echo "<h2>Wrong Page wkwk :v</h2>";
	}
	?>
	</div>
</div>

<?php } ?>
</div>
</body>
</html>