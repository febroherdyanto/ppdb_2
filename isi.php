<?php
$koneksi = mysqli_connect('localhost','psbsmknm_psb','febro123herdyanto','psbsmknm_psb');
if(!$koneksi){
	echo "GAGAL Koneksi, ".mysqli_connect_error();
}
?>
