<?php
include "../config/koneksi.php";

$query = mysqli_query($koneksi,"select * from g2_bio_siswa");
$cek = mysqli_num_rows($query);
echo $cek;

?>