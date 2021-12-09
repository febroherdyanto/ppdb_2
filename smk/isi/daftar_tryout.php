<h2>Nama 10 Besar Tryout Tertinggi</h2>

<a href="isi/excel_tryout.php"><button class="btn btn-md btn-danger"><i class="fa fa-print"></i> Cetak</button></a>
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
