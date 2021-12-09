<?php include '../../config/koneksi.php'; ?>
<table width="100%" border="1">
	<thead>
		<th>No.</th>
		<th>No Siswa</th>
		<th>Nama Siswa</th>
		<th>Asal Sekolah</th>
		<th>Jurusan</th>
		<th>Diterima</th>
	</thead>
<?php $no = 1;
$q = mysqli_query($koneksi,"select * from bio_siswa order by no_sementara ASC");
while($t = mysqli_fetch_array($q)){ ?>
	<tbody><tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $t['no_sementara']; ?></td>
		<td><?php echo strtoupper($t['nama_siswa']); ?></td>
		<td><?php echo strtoupper($t['asal_sekolah']); ?></td>
		<td><?php echo $t['jurusan']; ?></td>
		<td><?php echo $t['diterima']; ?></td>
	</tr>
	<?php $no++; } ?></tbody>
</table>