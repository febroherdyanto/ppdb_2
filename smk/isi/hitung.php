<?php
$getno = $_GET['no'];
$gethal = $_GET['hal'];

include '../../config/koneksi.php';

$q1 = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$getno'");
$t1 = mysqli_fetch_array($q1);
	$smt3 = $t1['raport_smt3'];
	$smt4 = $t1['raport_smt4'];
	$smt5 = $t1['raport_smt5'];
	$tulis = $t1['tes_tulis'];

	$akademik = $t1['piagam_akademik'];
	$olahraga = $t1['piagam_olahraga'];
	$senibudaya = $t1['piagam_senibudaya'];

	$rata_rata = (($smt3+$smt4+$smt5+$tulis)/4)+$akademik+$olahraga+$senibudaya;
	$rata = round($rata_rata,2);

$q2 = mysqli_query($koneksi,"update g2_bio_siswa set rata_total='$rata' where no_siswa='$getno'");
if($q2 == 1){
	echo "<script>document.location.href='../index.php?halaman=$gethal'</script>";
}else{
	echo "GAGAL HITUNG RATA-RATA, Karena ".mysqli_error($koneksi);
}

?>