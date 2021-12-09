<?php session_start(); ?>
<script type="text/javascript" src="asset/js/jquery-1.11.0.js"></script>
<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if(!ctype_alnum($username) OR !ctype_alnum($password)){
	echo "<script>alert('Maaf, Login tidak bisa di injeksi..');
	document.location.href='../smk/login';
	</script>";
}else{
$query = mysqli_query($koneksi,"select * from user where username='$username' and password_2='$password'");
$result = mysqli_fetch_array($query);

if($result != NULL){
	session_start();
	$_SESSION['psbsmk'] = array('kode_user'=>$result['kode_user'], 'nama'=>$result['nama_user']
		, 'username'=>$result['username'], 'level'=>$result['level']);
	echo "<script>document.location.href='../smk/Halaman-Utama'</script>";
}else{
echo "<script>alert('Maaf, Login Gagal...');
	document.location.href='../smk/login/';
	</script>";
}

}?>