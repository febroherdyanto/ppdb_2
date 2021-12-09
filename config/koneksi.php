<?php
$koneksi = mysqli_connect('localhost','root','','ppdb_1');
if(!$koneksi){
	echo "GAGAL Koneksi, ".mysqli_connect_error();
}
?>