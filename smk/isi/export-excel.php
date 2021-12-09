<h2>Cetak / Export Pengumuman Melalui Excel<br>
Pilih Jurusan</h2>
<form method="post" action="">
	<select name="jur" class="form-control">
		<option value="TO">Teknik Ototronik (TO)</option>
		<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
		<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
		<option value="TSM">Teknik Sepeda Motor (TSM)</option>
	</select>
	<button name="simpan" type="submit" class="btn btn-md btn-primary">CETAK</button>
</form>

<?php
if(isset($_POST['simpan'])){
	$jur = $_POST['jur'];

	echo "<script>document.location.href='isi/export-pengumuman.php?jur=$jur'</script>";
}
?>