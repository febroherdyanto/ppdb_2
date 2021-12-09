<?php
$no = $_GET['no'];

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=ruang_$no.xls");


include '../../config/koneksi.php'; ?>

<table border="1">
<thead>
	<th>No.</th>
	<th>No Siswa</th>
	<th>Nama Siswa</th>
	<th>Asal Sekolah</th>
</thead>
<tbody>
<?php $query = mysqli_query($koneksi,"select * from bio_siswa where ruang='$no' order by no_sementara ASC");
$nourut = 1;
while($a = mysqli_fetch_array($query)){ ?>
<tr>
	<td><?php echo $nourut; ?></td>
	<td><?php echo $a['no_sementara']; ?></td>
	<td><?php echo $a['nama_siswa']; ?></td>
	<td><?php echo $a['asal_sekolah']; ?></td>
</tr>
<?php $nourut++; } ?>
</tbody>
</table>

