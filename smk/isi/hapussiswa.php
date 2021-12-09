<?php
$getno = $_GET['no'];

include '../../config/koneksi.php';

$q2 = mysqli_query($koneksi,"delete from g2_kesehatan where no_siswa='$getno'") or die("GAGAL HAPUS KESEHATAN ".mysqli_error($koneksi));

$q3 = mysqli_query($koneksi,"delete from g2_bio_siswa where no_siswa='$getno'") or die("GAGAL HAPUS BIO ".mysqli_error($koneksi));

if(($q2 == 1) AND ($q3 == 1)){
	echo "<script>alert('Berhasil Hapus');
	document.location.href='../index.php?halaman=Data-Siswa'</script>";
}else{
	echo "GAGAL HAPUS";
}

?>