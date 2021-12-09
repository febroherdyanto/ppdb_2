<h2>Edit Data Nilai</h2>
<?php
$getno = $_GET['no'];

$q1 = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$getno'") or die("ERROR ".mysqli_error($koneksi));
while($t1 = mysqli_fetch_array($q1)){ ?>

<form method="post" action="">
	<table width="50%" class="table table-bordered">
		<tr>
			<td colspan="2" align="center">NILAI RAPORT</td>
		</tr>
		<tr>
			<td width="40%">Semester 3</td>
			<td width="60%"><input type="text" name="smt3" value="<?php echo $t1['raport_smt3']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Semester 4</td>
			<td width="60%"><input type="text" name="smt4" value="<?php echo $t1['raport_smt4']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Semester 5</td>
			<td width="60%"><input type="text" name="smt5" value="<?php echo $t1['raport_smt5']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Tes Online</td>
			<td width="60%"><input type="text" name="tes" value="<?php echo $t1['tes_tulis']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Piagam Olahraga</td>
			<td width="60%"><input type="text" name="olg" value="<?php echo $t1['piagam_olahraga']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Piagam Akademik</td>
			<td width="60%"><input type="text" name="aka" value="<?php echo $t1['piagam_akademik']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Piagam Seni Budaya</td>
			<td width="60%"><input type="text" name="snb" value="<?php echo $t1['piagam_senibudaya']; ?>"></input></td>
		</tr>
		<tr>
			<td width="40%">Nilai Rata-Rata</td>
			<td width="60%"><input type="text" name="rata" value="<?php echo $t1['rata_total']; ?>" disabled>Hanya Bisa di Lihat</td>
		</tr>
		<tr>
			<td colspan="2"><b>MATIKAN INPUT DARI SISWA</b></td>
		</tr>
		<tr>
			<td>Semester 3</td>
			<td><?php
				$d3 = $t1['dis3'];
				if($d3 == 'N'){
					echo "<input type='radio' name='dis3' value='N' checked>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis3' value='Y'>MATIKAN Diisi oleh siswa";
				}else{
					echo "<input type='radio' name='dis3' value='N'>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis3' value='Y' checked>MATIKAN Diisi oleh siswa";
				}
			?></td>
		</tr>
		<tr>
			<td>Semester 4</td>
			<td><?php
				$d4 = $t1['dis4'];
				if($d4 == 'N'){
					echo "<input type='radio' name='dis4' value='N' checked>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis4' value='Y'>MATIKAN Diisi oleh siswa";
				}else{
					echo "<input type='radio' name='dis4' value='N'>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis4' value='Y' checked>MATIKAN Diisi oleh siswa";
				}
			?></td>
		</tr>
		<tr>
			<td>Semester 5</td>
			<td><?php
				$d5 = $t1['dis5'];
				if($d5 == 'N'){
					echo "<input type='radio' name='dis5' value='N' checked>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis5' value='Y'>MATIKAN Diisi oleh siswa";
				}else{
					echo "<input type='radio' name='dis5' value='N'>Ijinkan Diisi oleh siswa<br>
					<input type='radio' name='dis5' value='Y' checked>MATIKAN Diisi oleh siswa";
				}
			?></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan" value="SIMPAN"></input></td>
		</tr>
	</table>
</form>
<?php } ?>

<?php
if(isset($_POST['simpan'])){
	$smt3 = addslashes(trim($_POST['smt3']));
	$smt4 = addslashes(trim($_POST['smt4']));
	$smt5 = addslashes(trim($_POST['smt5']));
	$tes = addslashes(trim($_POST['tes']));
	$dis3 = addslashes(trim($_POST['dis3']));
	$dis4 = addslashes(trim($_POST['dis4']));
	$dis5 = addslashes(trim($_POST['dis5']));
	$olg = addslashes(trim($_POST['olg']));
	$aka = addslashes(trim($_POST['aka']));
	$snb = addslashes(trim($_POST['snb']));

	$rata_rata = (($smt3+$smt4+$smt5+$tes)/4)+$olg+$aka+$snb;
	$rata = round($rata_rata,2);

	$query = mysqli_query($koneksi,"update g2_bio_siswa set raport_smt3='$smt3', raport_smt4='$smt4', raport_smt5='$smt5', tes_tulis='$tes', piagam_senibudaya='$snb', piagam_olahraga='$olg', piagam_akademik='$aka', rata_total='$rata', dis3='$dis3', dis4='$dis4', dis5='$dis5' where no_siswa='$getno'");

	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Nilai'</script>";
	}else{
		echo "GAGAL";
	}
}

?>