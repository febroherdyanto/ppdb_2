<?php

 header("Content-Type: application/vnd-ms-excel");
 header("Cache-Control: no-cache, must-revalidate");
 header("content-disposition: attachment;filename=Pengumuman_Gelombang2.xls");

include '../../config/koneksi.php';
?>

<title>Daftar Siswa Diterima</title>
<style type="text/css">
	.a{
		background-color: red;
		font-weigth: bold;
		font-size: 20px;
		color: white;
	}
	#bgc{
		background-color: #FF0000;
		color: white;
		font-size: 20px;
		text-align: center;
	}
	#bgh{
		background-color: cyan;
	}
	#b{
		background-color: yellow;
	}
</style>

<h1 align="center"><b>PSB T/A 2016/2017 GELOMBANG 2</b></h1>
	<table border="1" align="center">
		<thead>
			<th id="bgh">No.</th>
			<th id="bgh">No. Siswa</th>
			<th id="bgh">Nama Siswa</th>
			<th id="bgh">Jenkel</th>
			<th id="bgh">Jurusan</th>
			<th id="bgh">Asal Sekolah</th>
		</thead>
		<tbody>
	<?php
	 $query1 = mysqli_query($koneksi,"select * from g2_bio_siswa where diterima='Y' order by nama_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query1)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td align="center">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center"><?php echo $tampil['jenkel']; ?></td>
			<td align="center"><?php echo $tampil['jurusan']; ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		<tr>
			<td colspan="6" class="a" align="center">TIDAK DITERIMA</td>
		</tr>
	<?php
	 $query1 = mysqli_query($koneksi,"select * from g2_bio_siswa where diterima='N' order by nama_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query1)){ ?>
		<tr>
			<td align="center" id="b"><?php echo $no; ?>.</td>
			<td align="center" id="b">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td id="b"><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center" id="b"><?php echo $tampil['jenkel']; ?></td>
			<td align="center" id="b"><?php echo $tampil['jurusan']; ?></td>
			<td id="b"><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		</tbody>
	</table>