<?php
/*
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("content-disposition: attachment;filename=Export_Data_Calon_Siswa_".date('dmY')."_".date('His').".xls");
*/

include '../../config/koneksi.php'; ?>


<table>
<tr>
	<td colspan="8"><b><h1>DATA CALON SISWA T/A 2016/2017</h1></b></td>
</tr>
<thead>
	<th>No Siswa</th>
	<th>Nama Siswa</th>
	<th>TTL</th>
	<th>JK</th>
	<th>Telp Siswa</th>
	<th>Agama</th>
	<th>Nama Ayah</th>
	<th>Nama Ibu</th>
	<th>Alamat</th>
	<th>Pekerjaan Ayah</th>
	<th>Pekerjaan Ibu</th>
	<th>Asal Sekolah</th>
	<th>Jurusan</th>
	<th>TB</th>
	<th>BB</th>
	<th>Buta Warna</th>
	<th>Catatan Fisik</th>
	<th>Semester 3</th>
	<th>Semester 4</th>
	<th>Semester 5</th>
	<th>TryOut</th>
	<th>Piagam Akademik</th>
	<th>Piagam Olahraga</th>
	<th>Piagam SeniBudaya</th>
	<th>Rata-Rata</th>
</thead>

<tbody>
<?php
$q1 = mysqli_query($koneksi, "select * from bio_siswa, kesehatan, nilai");
while($t1 = mysqli_fetch_array($q1)){
?>
<tr>
	<td><?php echo $t1['no_sementara'];?></td>
	<td><?php echo $t1['nama_siswa'];?></td>
	<td><?php echo $t1['tempat_lahir'].", ".$t1['tgl_lahir'];?></td>
	<td><?php echo $t1['jenkel'];?></td>
	<td><?php echo $t1['telp'];?></td>
	<td><?php echo $t1['agama'];?></td>
	<td><?php echo $t1['nama_ayah'];?></td>
	<td><?php echo $t1['nama_ibu'];?></td>
	<td><?php echo $t1['alamat'];?></td>
	<td><?php echo $t1['pekerjaan_ayah'];?></td>
	<td><?php echo $t1['pekerjaan_ibu'];?></td>
	<td><?php echo $t1['asal_sekolah'];?></td>
	<td><?php echo $t1['jurusan'];?></td>
	<td><?php echo $t2['tinggi_badan'];?></td>
	<td><?php echo $t2['berat_badan'];?></td>
	<td><?php echo $t2['buta_warna'];?></td>
	<td><?php echo $t2['fisik'];?></td>
	<td><?php echo $t3['raport_smt3'];?></td>
	<td><?php echo $t3['raport_smt4'];?></td>
	<td><?php echo $t3['raport_smt5'];?></td>
	<td><?php echo $t3['tes_tulis'];?></td>
	<td><?php echo $t3['piagam_akademik'];?></td>
	<td><?php echo $t3['piagam_olahraga'];?></td>
	<td><?php echo $t3['piagam_senibudaya'];?></td>
	<td><?php echo $t3['rata_total'];?></td>
</tr><?php }?>
</tbody>
</table>
