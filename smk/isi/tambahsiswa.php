<script type="text/javascript" src="jquery-1.9.1.js"></script>
<h3 align="center"><u>Tambah Data Calon Siswa T/A 2016/2017</u></h3>

<form method="post" action="">

<table width="100%" border="2">
	<tr>
		<td colspan="2"><font color="blue"><b><u>BIODATA DIRI</u></b></font></td>
	</tr>
	<tr>
		<td width="30%">Nama Lengkap</td>
		<td width="70%">: <input type="text" name="nama" placeholder="Nama Lengkap" required></td>
	</tr>
	<tr>
		<td width="30%">No Pendaftaran Sementara</td>
		<td width="70%">: <input type="text" name="sementara" placeholder="No Sementara" required></td>
	</tr>
	<tr>
		<td>Tempat, Tanggal Lahir</td>
		<td>: <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
		<input type="date" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>*yyyy/mm/dd</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>: <select name="jenkel">
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select></td>
	</tr>
	<tr>
		<td>No. Telp / HP</td>
		<td>: <input type="number" name="telp" placeholder="No. Telp / HP"></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>: <select name="agama">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>
		</select></td>
	</tr>
	<tr>
		<td>Alamat Lengkap</td>
		<td>: <input type="text" name="ds" value="Dk/Ds. " required>
			<input type="text" name="rtrw" value="RT/RW. ">
			<input type="text" name="kec" value="Kec. " required>
			<input type="text" name="kab" value="Kab. Madiun" required></td>
	</tr>
	
	<tr>
		<td colspan="2"><font color="blue"><b><u>BIODATA ORANG TUA</u></b></font></td>
	</tr>
	<tr>
		<td>Nama Ayah</td>
		<td>: <input type="text" name="nama_ayah" placeholder="Nama Ayah" required></td>
	</tr>
	<tr>
		<td>Pekerjaan Ayah</td>
		<td>: <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required></td>
	</tr>
	<tr>
		<td>Nama Ibu</td>
		<td>: <input type="text" name="nama_ibu" placeholder="Nama Ibu" required></td>
	</tr>
	<tr>
		<td>Pekerjaan Ibu</td>
		<td>: <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>LAIN-LAIN</u></b></font></td>
	</tr>
	<tr>
		<td>Asal Sekolah</td>
		<td>: <input type="text" name="asal_sekolah" placeholder="Asal Sekolah" required></td>
	</tr>
	<tr>
		<td>Komptensi Keahlian yang dipilih</td>
		<td>: <select name="jurusan">
			<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknik Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
		</select></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>DATA KESEHATAN</u></b></font></td>
	</tr>
	<tr>
		<td>Tinggi Badan</td>
		<td>: <input type="number" name="tinggi" placeholder="Tinggi Badan"> cm</td>
	</tr>
	<tr>
		<td>Berat Badan</td>
		<td>: <input type="number" name="berat" placeholder="Berat Badan"> kg</td>
	</tr>
	<tr>
		<td>Buta Warna</td>
		<td>: <select name="buta_warna">
			<option value="YA">YA</option>
			<option value="TIDAK" selected>TIDAK</option>
		</select></td>
	</tr>
	<tr>
		<td>Catatan Fisik dari Petugas</td>
		<td>: <textarea name="fisik" cols="40" rows="2">-</textarea></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>DATA NILAI</u></b></font></td>
	</tr>
	<tr>
		<td>Raport Semester 3</td>
		<td>: <input type="text" name="smt3" placeholder="Semester 3" required></td>
	</tr>
	<tr>
		<td>Raport Semester 4</td>
		<td>: <input type="text" name="smt4" placeholder="Semester 4" required></td>
	</tr>
	<tr>
		<td>Raport Semester 5</td>
		<td>: <input type="text" name="smt5" placeholder="Semester 5" required></td>
	</tr>
	<tr>
		<td>Tes Tulis (TryOut)</td>
		<td>: <input type="text" name="tulis" placeholder="Tes Tulis" value="0" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Akademik</td>
		<td>: <input type="text" name="akademik" value="0" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Olahraga</td>
		<td>: <input type="text" name="olahraga" value="0" required></td>
	</tr>
	<tr>
		<td>Sertifikat / Piagam Seni Budaya</td>
		<td>: <input type="text" name="senibudaya" value="0" required></td>
	</tr>

	<tr>
		<td colspan="2"><font color="blue"><b><u>PERLENGKAPAN PERSYARATAN</u></b></font></td>
	</tr>
	<tr>
		<td>Formulir Pendaftaran</td>
		<td>: <select name="formulir">
				<option value="Y" selected>Y</option>
				<option value="N">N</option>
			  </select></td>
	</tr>
	<tr>
		<td>Fotocopy Raport Semester 3-5 Legalisir</td>
		<td>: <select name="fc_raport">
				<option value="Y" selected>Y</option>
				<option value="N">N</option>
			  </select></td>
	</tr>
	<tr>
		<td>Fotocopy Akte Kelahiran 3 Lembar</td>
		<td>: <select name="fc_akte">
				<option value="Y" selected>Y</option>
				<option value="N">N</option>
			  </select></td>
	</tr>
	<tr>
		<td>Jumlah Pas Foto 3x4 (3 Lembar)</td>
		<td>: <input type="number" name="jml_foto" placeholder="Jumlah Foto" value="1" required>
	</tr>
	<tr>
		<td>Surat Keterangan Rangking Smt 5</td>
		<td>: <select name="rangking">
				<option value="Y" selected>Y</option>
				<option value="N">N</option>
			  </select></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" name="proses" class="btn btn-md btn-primary" value="SIMPAN"></td>
	</tr>
</table>

</form>

<?php
if(isset($_POST['proses'])){
$nama = addslashes(trim($_POST['nama']));
$sementara = addslashes(trim($_POST['sementara']));
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


$query1 = mysqli_query($koneksi,"insert into bio_siswa values('$sementara','$nama',
	'$tempat_lahir','$tgl_lahir','$jenkel','$telp','$agama','$nama_ayah','$nama_ibu','$alamat',
	'$pekerjaan_ayah','$pekerjaan_ibu','$asal_sekolah','$jurusan','$smt3','$smt4',
	'$smt5','$tulis','$akademik','$olahraga','$senibudaya','$rata','N','0')") or
	die("GAGAL INSERT BIODATA : ".mysqli_error($koneksi));


// ******************************************************************
// PROSES EDIT DATA KESEHATAN
// ******************************************************************
$tinggi = addslashes(trim($_POST['tinggi']));
$berat = addslashes(trim($_POST['berat']));
$buta_warna = addslashes(trim($_POST['buta_warna']));
$fisik = addslashes(trim(nl2br($_POST['fisik'])));

$query2 = mysqli_query($koneksi,"insert into kesehatan values('$sementara','$tinggi',
	'$berat','$buta_warna','$fisik')") or die("GAGAL INSERT DATA KESEHATAN, karena : ".
	mysqli_error($koneksi));





// ******************************************************************
// PROSES INPUT DATA PERSYARATAN
// ******************************************************************
$formulir = trim($_POST['formulir']);
$fc_raport = trim($_POST['fc_raport']);
$fc_akte = trim($_POST['fc_akte']);
$jml_foto = addslashes(trim($_POST['jml_foto']));
$rangking = trim($_POST['rangking']);

$query4 = mysqli_query($koneksi,"insert into persyaratan values('$sementara','$formulir',
	'$fc_raport','$fc_akte','$jml_foto','$rangking')") or die("GAGAL INPUT DATA SYARAT,karena ".mysqli_error($koneksi));

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

if(($query1) AND ($query2) AND ($query4)){
	echo "<script>document.location.href='index.php?halaman=Data-Siswa';</script>";
 }else{
	echo "GAGAL SIMPAN : ".mysqli_error($koneksi);
}
}
?>