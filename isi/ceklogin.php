<?php session_start(); ?>
<script type="text/javascript" src="../asset/js/jquery-1.11.0.js"></script>
<?php
include '../config/koneksi.php';

$username = addslashes($_POST['username']);
$password = addslashes(md5($_POST['password']));


$query = mysqli_query($koneksi,"select * from g2_bio_siswa where username='$username' and password='$password'");
$result = mysqli_fetch_array($query);

if($result != NULL){
	session_start();
	$_SESSION['s_log'] = array('s_no_siswa'=>$result['no_siswa'], 's_nama'=>$result['nama_siswa']
		, 'username'=>$result['username']);
	echo "<script>document.location.href='../index.php?halaman=Utama'</script>";
}else{
echo "<script>alert('Maaf, Login Gagal...');
	document.location.href='../index.php?halaman=Login';
	</script>";
}

?>