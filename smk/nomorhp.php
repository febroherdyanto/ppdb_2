<?php
/*
 header("Content-Type: application/vnd-ms-excel");
 header("Cache-Control: no-cache, must-revalidate");
 header("content-disposition: attachment;filename=Pengumuman_".$jur.".xls");
*/
include '../config/koneksi.php';
?>

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
<?php
	 $query1 = mysqli_query($koneksi,"select * from g2_bio_siswa order by no_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query1)){
echo $tampil['telp'].";";
}
/* ?>
<h1><b>Nomor HP Gelombang 2</b></h1>
	<table border="1">
		<thead id="bgh">
			<th>No.</th>
			<th>No Siswa</th>
			<th>Nama Siswa</th>
			<th>Nomor HP</th>
			<th>Jurusan</th>
			<th>Asal Sekolah</th>
		</thead>
		<tbody>
	<?php
	 $query1 = mysqli_query($koneksi,"select * from g2_bio_siswa order by no_siswa asc"); $no=1; while($tampil = mysqli_fetch_array($query1)){ ?>
		<tr>
			<td align="center"><?php echo $no; ?>.</td>
			<td align="center">PSB-16-2-<?php echo trim($tampil['no_siswa']); ?></td>
			<td><?php echo strtoupper($tampil['nama_siswa']); ?></td>
			<td><?php echo $tampil['telp']; ?></td>
			<td align="center"><?php echo strtoupper($tampil['jurusan']); ?></td>
			<td><?php echo strtoupper($tampil['asal_sekolah']); ?></td>
		</tr>
	<?php $no++; } ?>
		
		</tbody>
	</table>
