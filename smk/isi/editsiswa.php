<?php $getno = $_GET['no']; ?>
<h3 align="center"><u>Edit Data Calon Siswa T/A 2016/2017</u></h3>

<?php
$t1 = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$getno'");
$bio = mysqli_fetch_array($t1);?>

<form method="post" action="">

<table width="100%">
	<tr><input type="text" name="diterima" value="<?php echo $bio['diterima']; ?>" hidden>
		<td colspan="2"><font color="blue"><b><u>BIODATA DIRI</u></b></font></td>
	</tr>
	<tr>
		<td width="30%">Nama Lengkap</td>
		<td width="70%">: <input type="text" name="no_siswa" value="<?php echo $bio['no_siswa'];?>" required readonly></td>
	</tr>
	<tr>
		<td width="30%">No Sementara</td>
		<td width="70%">: <input type="text" name="nama" value="<?php echo $bio['nama_siswa'];?>" required></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>: <input type="text" name="tempat_lahir" value="<?php echo $bio['tempat_lahir'];?>" required>
		<input type="date" name="tgl_lahir" id="tanggal" value="<?php echo $bio['tgl_lahir'];?>" required>*yyyy/mm/dd</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>: <?php
		if($bio['jenkel'] == 'L'){
			echo '<input type="radio" name="jenkel" value="L" checked required>Laki-Laki
			<input type="radio" name="jenkel" value="P" required>Perempuan</td>';
		}else if($bio['jenkel'] == 'P'){
			echo '<input type="radio" name="jenkel" value="L" checked required>Laki-Laki
			<input type="radio" name="jenkel" value="P" checked required>Perempuan</td>';
		}
		?>
	</tr>
	<tr>
		<td>No. Telp / HP</td>
		<td>: <input type="text" name="telp" value="<?php echo $bio['telp'];?>"></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>: <select name="agama">
		<?php
		if($bio['agama'] == 'Islam'){
		echo '<option value="Islam" selected>Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($bio['agama'] == 'Kristen'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen" selected>Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($bio['agama'] == 'Hindu'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu" selected>Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($bio['agama'] == 'Budha'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha" selected>Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($bio['agama'] == 'Katolik'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik" selected>Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($bio['agama'] == 'Khong Hu Cu'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu" selected>Khong Hu Cu</option>';
		}
		?>
		</select></td>
	</tr>
	<tr>
		<td>Alamat Lengkap</td>
	<?php
	$alamat = $bio['alamat'];
	$pecah = explode(', ', $alamat);
	?>
		<td>: <input type="text" name="ds" value="<?php echo $pecah[0];?>" required>
			<input type="text" name="rtrw" value="<?php echo $pecah[1];?>">
			<input type="text" name="kec" value="<?php echo $pecah[2];?>" required>
			<input type="text" name="kab" value="<?php echo $pecah[3];?>" required></td>
	</tr>
	
	<tr>
		<td colspan="2"><font color="blue"><b><u>BIODATA ORANG TUA</u></b></font></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>: <input type="text" name="nama_ayah" value="<?php echo $bio['nama_ayah'];?>" required></td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td>: <input type="text" name="pekerjaan_ayah" value="<?php echo $bio['pekerjaan_ayah'];?>" required></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>: <input type="text" name="nama_ibu" value="<?php echo $bio['nama_ibu'];?>" required></td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td>: <input type="text" name="pekerjaan_ibu" value="<?php echo $bio['pekerjaan_ibu'];?>" required></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>LAIN-LAIN</u></b></font></td>
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td>: <input type="text" name="asal_sekolah" value="<?php echo $bio['asal_sekolah'];?>" required></td>
	</tr>
	<tr>
		<td>Komptensi Keahlian yang dipilih</td>
		<td>: <select name="jurusan">
		<?php
		if($bio['jurusan'] == 'TO'){
		echo	'<option value="TO" selected>Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknik Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>';
		}else if($bio['jurusan'] == 'RPL'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL" selected>Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknik Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>';
		}else if($bio['jurusan'] == 'TPHP'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP" selected>Teknik Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>';
		}else if($bio['jurusan'] == 'TKR'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknik Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR" selected>Teknik Kendaraan Ringan (TKR)</option>';
		} ?>
		</select></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>DATA KESEHATAN</u></b></font></td>
	</tr>
	<?php
	$t2 = mysqli_query($koneksi,"select * from g2_kesehatan where no_siswa='$getno'");
	$kes = mysqli_fetch_array($t2);
	?>
	<tr>
		<td>Tinggi Badan</td>
		<td>: <input type="number" name="tinggi" value="<?php echo $kes['tinggi_badan'];?>"> cm</td>
	</tr>
	<tr>
		<td>Berat Badan</td>
		<td>: <input type="number" name="berat" value="<?php echo $kes['berat_badan'];?>"> kg</td>
	</tr>
	<tr>
		<td>Buta Warna</td>
		<td>: <?php
		if($kes['buta_warna'] == 'YA'){
		echo '<input type="radio" name="buta_warna" value="YA" checked required>YA
		<input type="radio" name="buta_warna" value="TIDAK" required>TIDAK</td>';
		}else if($kes['buta_warna'] == 'TIDAK'){
		echo '<input type="radio" name="buta_warna" value="YA" required>YA
		<input type="radio" name="buta_warna" value="TIDAK" checked required>TIDAK</td>';
		} ?>
	</tr>
	<tr>
		<td>Catatan Fisik dari Petugas</td>
		<td>: <textarea name="fisik" cols="40" rows="2"><?php echo $kes['catatan'];?></textarea></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>DATA NILAI</u></b></font></td>
	</tr>
	<tr>
		<td>Raport Semester 3</td>
		<td>: <input type="text" name="smt3" value="<?php echo $bio['raport_smt3'];?>" required></td>
	</tr>
	<tr>
		<td>Raport Semester 4</td>
		<td>: <input type="text" name="smt4" value="<?php echo $bio['raport_smt4'];?>" required></td>
	</tr>
	<tr>
		<td>Raport Semester 5</td>
		<td>: <input type="text" name="smt5" value="<?php echo $bio['raport_smt5'];?>" required></td>
	</tr>
	<tr>
		<td>Tes Tulis (TryOut)</td>
		<td>: <input type="text" name="tulis" value="<?php echo $bio['tes_tulis'];?>" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Akademik</td>
		<td>: <input type="text" name="akademik" value="<?php echo $bio['piagam_akademik'];?>" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Olahraga</td>
		<td>: <input type="text" name="olahraga" value="<?php echo $bio['piagam_olahraga'];?>" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Seni Budaya</td>
		<td>: <input type="text" name="senibudaya" value="<?php echo $bio['piagam_senibudaya'];?>" required></td>
	</tr>

	<tr align="center">
		<td colspan="2"><input type="submit" name="proses" value="UPDATE"></td>
	</tr>
</table>

</form>

<?php
if(isset($_POST['proses'])){
$nama_siswa = addslashes(trim($_POST['nama']));
$tempat_lahir = addslashes(trim($_POST['tempat_lahir']));
$tgl_lahir = trim($_POST['tgl_lahir']);
$jenkel = $_POST['jenkel'];
$telp = addslashes(trim($_POST['telp']));
$agama = trim($_POST['agama']);
$nama_ayah = addslashes(trim($_POST['nama_ayah']));
$nama_ibu = addslashes(trim($_POST['nama_ibu']));
$alamat = addslashes(trim($_POST['ds'])).", ".addslashes(trim($_POST['rtrw'])).", ".
	addslashes(trim($_POST['kec'])).", ".addslashes(trim($_POST['kab']));
$pekerjaan_ayah = addslashes(trim($_POST['pekerjaan_ayah']));
$pekerjaan_ibu = addslashes(trim($_POST['pekerjaan_ibu']));
$asal_sekolah = addslashes(trim($_POST['asal_sekolah']));
$jurusan = trim($_POST['jurusan']);

$smt3 = addslashes(trim($_POST['smt3']));
$smt4 = addslashes(trim($_POST['smt4']));
$smt5 = addslashes(trim($_POST['smt5']));
$tulis = addslashes(trim($_POST['tulis']));
$akademik = addslashes(trim($_POST['akademik']));
$olahraga = addslashes(trim($_POST['olahraga']));
$senibudaya = addslashes(trim($_POST['senibudaya']));
$rata_rata = (($smt3+$smt4+$smt5+$tulis)/4)+$akademik+$olahraga+$senibudaya;
$rata = round($rata_rata,2);
$diterima = $_POST['diterima'];

$query1 = mysqli_query($koneksi,"update g2_bio_siswa set nama_siswa='$nama_siswa', tempat_lahir='$tempat_lahir',
	tgl_lahir='$tgl_lahir',jenkel='$jenkel',telp='$telp',agama='$agama',nama_ayah='$nama_ayah',
	nama_ibu='$nama_ibu',alamat='$alamat',pekerjaan_ayah='$pekerjaan_ayah',
	pekerjaan_ibu='$pekerjaan_ibu',asal_sekolah='$asal_sekolah',jurusan='$jurusan', raport_smt3='$smt3',raport_smt4='$smt4',raport_smt5='$smt5',tes_tulis='$tulis',piagam_akademik='$akademik',
	piagam_olahraga='$olahraga',piagam_senibudaya='$senibudaya',rata_total='$rata', diterima='$diterima'
	where no_siswa='$getno'") or die("GAGAL UPDATE BIODATA : ".mysqli_error($koneksi));


// ******************************************************************
// PROSES INPUT DATA KESEHATAN
// ******************************************************************
$tinggi = addslashes(trim($_POST['tinggi']));
$berat = addslashes(trim($_POST['berat']));
$buta_warna = addslashes(trim($_POST['buta_warna']));
$fisik = addslashes(trim(nl2br($_POST['fisik'])));

$query2 = mysqli_query($koneksi,"update kesehatan set tinggi_badan='$tinggi',berat_badan='$berat',
	buta_warna='$buta_warna',fisik='$fisik' where no_siswa='$getno'")
	or die("GAGAL UPDATE DATA KESEHATAN, karena : ".mysqli_error($koneksi));






if(($query1) AND ($query2)){
echo "<script>alert('Data Berhasil Di Update');
	document.location.href='index.php?halaman=Data-Siswa';</script>";
 }else{
	echo "GAGAL SIMPAN : ".mysqli_error($koneksi);
}
}
?>