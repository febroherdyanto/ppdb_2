<h2>Nama 10 Besar Tryout Tertinggi</h2>

<table class="table table-hover table-bordered">
	<thead>
		<th>No.</th>
		<th>No. Siswa</th>
		<th>Nama Siswa</th>
		<th>Jurusan</th>
		<th>Jenkel</th>
		<th>Asal Sekolah</th>
		<th>Nilai TryOut</th>
	</thead>
<?php
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("content-disposition: attachment;filename=10_Besar_TryOut.xls");

include '../../config/koneksi.php';
$query = mysqli_query($koneksi,"select * from bio_siswa where diterima='Y' order by tes_tulis desc limit 10 ");
$no = 1;
while($t = mysqli_fetch_array($query)){ ?>
	<tbody>
	<tr>
		<td align="center"><?php echo $no; ?></td>
		<td align="center"><?php echo $t['no_sementara']; ?></td>
		<td><?php echo strtoupper($t['nama_siswa']); ?></td>
		<td align="center"><?php echo $t['jurusan']; ?></td>
		<td align="center"><?php echo $t['jenkel']; ?></td>
		<td><?php echo strtoupper($t['asal_sekolah']); ?></td>
		<td align="center"><?php echo $t['tes_tulis']; ?></td>
	</tr>
<?php $no++; } ?>
	</tbody>
</table>
