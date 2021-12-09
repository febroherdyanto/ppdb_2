<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-edit"></i> 
			DATA NILAI</h2>
</div>
<div class="panel-body">
<div class="col col-sm-12">
	<div class="col col-sm-12" align="center"><b><i><h3>Isilah Data Nilai dengan Jujur, Benar, dan Teliti</i></b></h3></div>
</div>


<hr>
<h4 style="color:red; font-weight: bold;"><i class="fa fa-exclamation-triangle"></i> INFORMASI PENULISAN NILAI</h4>
<textarea class="form-control" cols="100%" rows="5" disabled>
	ISILAH NILAI DENGAN JUJUR, BENAR, DAN TELITI !!

	Jika raport menggunakan Kurikulum 2006(KTSP), maka hitung rata-rata nilai dengan menjumlahkan nilai dari semua matapelajaran dalam satu semester dan membaginya dengan jumlah matapelajaran.
	Jika raport menggunakan Kurikulum 2013(K-13), maka penghitungan rata-rata nilai dengan :
	    1. Menjumlahkan Nilai Pegetahuan semua matapelajaran
	    2. Membagi dengan jumlah matapelajaran yang terkait
	    3. Dibagi 4 dan dikali 100

	Untuk semua rata-rata nilai dengan raport Kurikulum KTSP ataupun K-13, jika menemukan koma dalam dalam hasil penghitungan nilai, maka diambil 2 angka dibelakang koma tersebut.
	Contoh : 85.90

	Jika Calon Peserta Didik Baru SMKN 1 Mejayan yang memiliki Piagam Penghargaan (Juara 1/2/3) Tingkat Kabupaten/Kota, Provinsi, Nasional maupun Internasional, silahkan di informasikan kepada panitia untuk menambah nilai PSB.
</textarea>
<hr>
<form method="post" action="">
<?php
$qt = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='".$s_no_siswa."'");
while($t = mysqli_fetch_array($qt)){
?>
<?php $dis3 = $t['dis3'];
$dis4 = $t['dis4'];
$dis5 = $t['dis5']; ?>
<div class="col col-sm-12">
	<div class="col col-sm-3">Rata-Rata Nilai Raport SMP</div>
	<div class="col col-sm-2">SEMESTER 3<input type="text" class="form-control" value="<?php echo round($t['raport_smt3'],2); ?>" name="smt3" placeholder="Semester 3" <?php if($dis3 == 'N'){ echo 'title="Masukkan Nilai Raport Semester 3 (VIII - Ganjil)"'; }else if($dis3 == 'Y'){echo 'readonly title="Nilai Sudah diperiksa Panitia. TIDAK BISA DIRUBAH"'; }else{ echo "readonly"; } ?>  required></div>
	<div class="col col-sm-2">SEMESTER 4<input type="text"class="form-control" value="<?php echo round($t['raport_smt4'],2); ?>" name="smt4" placeholder="Semester 4" <?php if($dis4 == 'N'){ echo 'title="Masukkan Nilai Raport Semester 4 (VIII - Genap)"'; }else if($dis4 == 'Y'){echo 'readonly title="Nilai Sudah diperiksa Panitia. TIDAK BISA DIRUBAH"'; }else{ echo "readonly"; } ?> required></div>
	<div class="col col-sm-2">SEMESTER 5<input type="text"class="form-control" value="<?php echo round($t['raport_smt5'],2); ?>" name="smt5" placeholder="Semester 5" <?php if($dis5 == 'N'){ echo 'title="Masukkan Nilai Raport Semester 5 (IX - Ganjil)"'; }else if($dis5 == 'Y'){echo 'readonly title="Nilai Sudah diperiksa Panitia. TIDAK BISA DIRUBAH"'; }else{ echo "readonly"; } ?> required></div>
</div>
<input type="text" name="no_siswa" value="<?php echo $s_no_siswa ?>" hidden></input>

<div class="col col-sm-12">
	<div class="col col-sm-2"> </div>
	<div class="col col-sm-5"><button type="submit" name="simpan" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> SIMPAN</button></div>
</div>
</form>
<?php } ?>
</div></div>

<?php

if(isset($_POST['simpan'])){
	$smt3 = addslashes(trim(round($_POST['smt3'])));
	$smt4 = addslashes(trim(round($_POST['smt4'])));
	$smt5 = addslashes(trim(round($_POST['smt5'])));
	$no_siswa = addslashes(trim($_POST['no_siswa']));
	$akademik = 0;
	$olahraga = 0;
	$senibudaya = 0;

$q1 = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$no_siswa'");
$t1 = mysqli_fetch_array($q1);
	$tulis = $t1['tes_tulis'];

	$rata_rata = (($smt3+$smt4+$smt5+$tulis)/4)+$akademik+$olahraga+$senibudaya;
	$rata = round($rata_rata,2);


	$query = mysqli_query($koneksi,"update g2_bio_siswa set raport_smt3='$smt3', raport_smt4='$smt4', raport_smt5='$smt5', tes_tulis='$tulis', piagam_akademik='$akademik', piagam_olahraga='$olahraga', piagam_senibudaya='$senibudaya', rata_total='$rata' where no_siswa='$no_siswa' ");
	if($query == 1){
		$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
		echo "<script>document.location.href='$url'</script>";
		echo "<h2>Data Tersimpan</h2>";
	}else{
		echo "GAGAL DISIMPAN ".mysqli_error($koneksi);
	}
}
?>