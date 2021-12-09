<?php include("../../config/koneksi.php"); ?>

<title>Cetak Nomor Meja TryOut PPDB</title>
<style type="text/css">	
	.head{
		font-family: Arial;
		font-size: 10px;
	}
	.isi{
		font-family: Arial;
		font-size: 13px;
	}
</style>

<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

$e = $_GET['e'];
$f = $_GET['f'];
$g = $_GET['g'];
$h = $_GET['h'];

$i = $_GET['i'];
$j = $_GET['j'];
$k = $_GET['k'];
$l = $_GET['l'];

$m = $_GET['m'];
$n = $_GET['n'];
$o = $_GET['o'];
$p = $_GET['p'];

?>

<table width="100%" border="1">
<tr>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$a'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$b'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$c'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$d'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
</tr>

<!-- ==================================================================
======================================================================= -->

<tr>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$e'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$f'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$g'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$h'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
</tr>

<!-- ==================================================================
======================================================================= -->

<tr>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$i'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$j'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$k'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$l'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
</tr>




<!-- ==================================================================
======================================================================= -->

<tr>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$m'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$n'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$o'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
	<td width="25%">
		<table border="0" width="100%">
			<tr class="head"><td width="15%" align="center"><img src="../img/kab.png" width="40px" height="40px"></td><td width="70%" align="center" valign="top">PEMERINTAHAN KABUPATEN MADIUN
			<br>DINAS PENDIDIKAN<br><b>SMK NEGERI 1 MEJAYAN</b></td><td width="15%" align="center"><img src="../img/smk.png" width="40px" height="40px"></td></tr>
			<tr class="isi"><td colspan="3"><?php $q1 = mysqli_query($koneksi,"select * from bio_siswa where no_sementara='$p'"); while($t = mysqli_fetch_array($q1)){
				echo "No. Siswa &nbsp;&nbsp;&nbsp;&nbsp;: ".$t['no_sementara']."<br>Nama Siswa &nbsp;: ".$t['nama_siswa']."<br>Jenkel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ";
				if($t['jenkel'] == 'L'){ echo 'Laki-Laki'; }else{ echo 'Perempuan'; };
				echo "<br>Asal Sekolah : ".$t['asal_sekolah']."<br>".
				"Jurusan 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$t['jurusan'];
			}?></td></tr>
		</table>
	</td>
</tr>
</table>

<script type="text/javascript">
	window.print();
</script>