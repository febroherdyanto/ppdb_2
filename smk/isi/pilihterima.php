<?php
include '../../config/koneksi.php';
$getno = $_GET['no'];
$gethal = $_GET['hal'];

$query = mysqli_query($koneksi,"update g2_bio_siswa set diterima='Y' where no_siswa='$getno'");
if($query == 1){
	echo "<script>document.location.href='../index.php?halaman=$gethal';</script>";
}
?>