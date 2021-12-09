<?php session_start(); ?>
<?php
include '../config/koneksi.php';
error_reporting(0);

if(!isset($_SESSION['rpl1'])){?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
</head>
<body OnLoad="document.flogin.username.focus();">



<table width="100%">
<tr>
	<td width="50%" valign="top">
		<form name="flogin" method="post" action="../config/ceklogin.php">
			Username : <input type="text" name="username"><br>
			Password : <input type="password" name="password"><br>
			<input type="submit" name="login" value="LOGIN">
		</form>
	</td>
	<td width="50%" valign="top">
	</td>
</tr>
</table>

<?php
include '../config/koneksi.php';
if(isset($_POST['daftar'])){
	$username = addslashes(trim($_POST['dusername']));
	$kode = addslashes(trim($_POST['dusername']));
	$pwd = addslashes(trim(md5($_POST['dpassword'])));
	$password = addslashes(trim($_POST['dpassword']));
	$nama = addslashes(trim($_POST['dnama']));

	$query = mysqli_query($koneksi,"insert into user values('$kode','$nama','$username','$password','$pwd','user')");
	if($query == 1){
		echo "<script>alert('Berhasil! SIlahkan login!');
		document.location.href='login.php'</script>";
	}else{
		echo "GAGAL Tambah Data ".mysqli_error($koneksi);
	}
}
?>




</body>
</html>
<?php }else{
echo "<script>document.location.href='index.php';</script>";
}?>
<script type="text/javascript" src="asset/js/jquery-1.9.1.js"></script>
