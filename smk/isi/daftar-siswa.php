<form method="post" action="">
	<h3 align="center">Masukkan 12 Nomor Siswa untuk di Cetak Nomor Bangku TryOut</h3>
	<table width="90%" align="center">
		<tr>
			<td width="30%">
				1. <input type="text" name="a"><br>
				2. <input type="text" name="b"><br>
				3. <input type="text" name="c"><br>
				4. <input type="text" name="d"><br>
				5. <input type="text" name="e"><br>
				6. <input type="text" name="f">
			</td>
			<td width="30%">
				7. &nbsp;&nbsp;<input type="text" name="g"><br>
				8. &nbsp;&nbsp;<input type="text" name="h"><br>
				9. &nbsp;&nbsp;<input type="text" name="i"><br>
				10. <input type="text" name="j"><br>
				11. <input type="text" name="k"><br>
				12. <input type="text" name="l">
			</td>
			<td width="30%">
				13. <input type="text" name="m"><br>
				14. <input type="text" name="n"><br>
				15. <input type="text" name="o"><br>
				16. <input type="text" name="p">
			</td>
		</tr>
		<tr><td colspan="3">&nbsp;</td></tr>
		<tr>
			<td colspan="2" align="center">Ruang Berapa ? <input type="text" name="ruang" required></input></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><br><button type="submit" name="proses" class="btn-sm btn-primary">Cetak</button></td>
		</tr>
	</table><br>
</form
>
<?php
if(isset($_POST['proses'])){
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	$g = $_POST['g'];
	$h = $_POST['h'];
	$i = $_POST['i'];
	$j = $_POST['j'];
	$k = $_POST['k'];
	$l = $_POST['l'];
	$m = $_POST['m'];
	$n = $_POST['n'];
	$o = $_POST['o'];
	$p = $_POST['p'];
	$ruang = $_POST['ruang'];

	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$a'") or die("GAGAL RUANG A".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$b'") or die("GAGAL RUANG B".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$c'") or die("GAGAL RUANG C".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$d'") or die("GAGAL RUANG D".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$e'") or die("GAGAL RUANG E".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$f'") or die("GAGAL RUANG F".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$g'") or die("GAGAL RUANG G".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$h'") or die("GAGAL RUANG H".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$i'") or die("GAGAL RUANG I".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$j'") or die("GAGAL RUANG J".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$k'") or die("GAGAL RUANG K".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$l'") or die("GAGAL RUANG L".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$m'") or die("GAGAL RUANG M".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$n'") or die("GAGAL RUANG N".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$o'") or die("GAGAL RUANG O".mysqli_error($koneksi));
	mysqli_query($koneksi,"update bio_siswa set ruang='$ruang' where no_sementara='$p'") or die("GAGAL RUANG P".mysqli_error($koneksi));



	echo "<script>document.location.href='isi/cetakdaftarruang.php?a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&g=$g&h=$h&i=$i&j=$j&k=$k&l=$l&m=$m&n=$n&o=$o&p=$p'</script>";
}
?>