<?php
$jur = $_GET['jur'];

 header("Content-Type: application/vnd-ms-excel");
 header("Cache-Control: no-cache, must-revalidate");
 header("content-disposition: attachment;filename=Pengumuman-Gelombang-II-".$jur.".xls");

include '../../config/koneksi.php';

if($jur == 'TO'){?>

<title>Daftar Siswa Diterima</title>
<style type="text/css">
	#cadangan{
		background-color: yellow;
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
</style>

<h1 align="center">Daftar yang diterima di Jurusan <b>TO</b></h1>
	<table border="1" align="center">
		<thead id="bgh">
			<th>No.</th>
			<th>No. Siswa</th>
			<th>Nama Siswa</th>
			<th>Jenkel</th>
			<th>Asal Sekolah</th>
		</thead>
		<tbody>
	<?php
	 $query1 = mysqli_query($koneksi,"select * from g2_bio_siswa where jurusan='TO' and diterima='Y' order by nama_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query1)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td align="center">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center"><?php echo $tampil['jenkel']; ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		
		</tbody>
	</table>


<?php }else if($jur == 'RPL'){?>
<h1 align="center">Daftar yang diterima di Jurusan <b>RPL</b></h1>
	<table border="1" align="center">
		<thead id="bgh">
			<th>No.</th>
			<th>No. Siswa</th>
			<th>Nama Siswa</th>
			<th>Jenkel</th>
			<th>Asal Sekolah</th>
		</thead>
		<tbody>
	<?php
	$query1 = mysqli_query($koneksi,"select * from g2_bio_siswa where jurusan='RPL' and diterima='Y' order by nama_siswa asc"); $no=1;  while($tampil = mysqli_fetch_array($query1)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td align="center">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center"><?php echo $tampil['jenkel']; ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		
		</tbody>
	</table>


<?php }else if($jur == 'TPHP'){?>
<h1 align="center">Daftar yang diterima di Jurusan <b>TPHP</b></h1>
	<table border="1" align="center">
		<thead id="bgh">
			<th>No.</th>
			<th>No. Siswa</th>
			<th>Nama Siswa</th>
			<th>Jenkel</th>
			<th>Asal Sekolah</th>
		</thead>
		<tbody>
	<?php 
	$query = mysqli_query($koneksi,"select * from g2_bio_siswa where jurusan='TPHP' and diterima='Y' order by nama_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td align="center">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center"><?php echo $tampil['jenkel']; ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		<tr>
	
		</tbody>
	</table>


<?php }else if($jur == 'TSM'){?>
<h1 align="center">Daftar yang diterima di Jurusan <b>TSM</b></h1>
	<table border="1" align="center">
		<thead id="bgh">
			<th>No.</th>
			<th>No. Siswa</th>
			<th>Nama Siswa</th>
			<th>Jenkel</th>
			<th>Asal Sekolah</th>
		</thead>
		<tbody>
	<?php 
	$query = mysqli_query($koneksi,"select * from g2_bio_siswa where jurusan='TSM' and diterima='Y' order by nama_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td>PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td align="center"><?php echo $tampil['jenkel']; ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		<tr>
			<td bgcolor="#EB5252" colspan="5" align="center"><b>CADANGAN</b></td>
		</tr>
	<?php 
	$query = mysqli_query($koneksi,"select * from g2_bio_siswa where jurusan='TSM' and diterima='N' order by nama_siswa asc limit 0,5"); $no=1; while($tampil = mysqli_fetch_array($query)){ ?>
		<tr>
			<td align="center" bgcolor="#F7F41B"><?php echo $no; ?>.</td>
			<td bgcolor="#F7F41B">PSB-16-2-<?php echo $tampil['no_siswa']; ?></td>
			<td bgcolor="#F7F41B"><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td bgcolor="#F7F41B" align="center"><?php echo $tampil['jenkel']; ?></td>
			<td bgcolor="#F7F41B"><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		
		</tbody>
	</table>


<?php }else{
	echo "<h2>Jurusan yang Anda Pilih Tidak Terdaftar</h2>";
}
?>