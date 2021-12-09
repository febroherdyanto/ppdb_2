<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-user"></i> 
		DETAIL PROFIL SISWA</h2>
</div>
<div class="panel-body">
<?php
$qt = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='".$s_no_siswa."'");
while($t = mysqli_fetch_array($qt)){
?>



<form method="post" action="">
<h3 align="center"><b>Ubah Profil..</b></h3>
<div class="col col-sm-12">
	<div class="col col-sm-2">Nama Lengkap</div>
	<div class="col col-sm-5"><input type="text" class="form-control" placeholder="Masukkan Nama Lengkap.." title="Masukkan Nama Lengkap.." name="nama" value="<?php echo $t['nama_siswa']; ?>" required></input></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2">Email Siswa</div>
	<div class="col col-sm-5"><input type="text" class="form-control" placeholder="Masukkan Email.." title="Masukkan Email.." name="email" value="<?php echo $t['email']; ?>" required></input></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2">Username</div>
	<div class="col col-sm-5"><input type="text" class="form-control" name="username" title="Username Calon Siswa tidak bisa dirubah.." value="<?php echo $t['username']; ?>" readonly required></input></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2">Ubah Password</div>
	<div class="col col-sm-5"><input type="text" name="password" class="form-control" placeholder="Masukkan Password baru" title="Masukkan Password baru.. Jika password tidak diruubah, Kosongkan kolom.."></input></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2"></div>
	<div class="col col-sm-8"><font color="red" style="font-weight: bold; font-style: italic;">* Jika password tidak dirubah, maka kosongkan kolom..</font></div>
</div>
<input type="text" name="no" value="<?php echo $s_no_siswa ?>" hidden></input>
<div class="col col-sm-12">
	<div class="col col-sm-2"></div>
	<div class="col col-sm-8"><button type="submit" class="btn btn-sm btn-primary" name="simpan"><i class="fa fa-save"></i> SIMPAN</button></div>
</div>
</form>
<?php } ?>
</div></div>


<?php
if(isset($_POST['simpan'])){
$nama = addslashes(strtoupper(trim($_POST['nama'])));
$email = addslashes(strtoupper(trim($_POST['email'])));
$password = addslashes(trim(md5($_POST['password'])));
$no = addslashes(trim($_POST['no']));
$username = $_POST['username'];

//**************************************************************************************


if($_POST['password'] == ''){
	mysqli_query($koneksi,"UPDATE g2_bio_siswa SET
                        nama_siswa     	= '$nama',
                        email 		   	= '$email'
                   		WHERE no_siswa  = '$no'");
	$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				echo "<script>document.location.href='$url'</script>";
}else{
	mysqli_query($koneksi,"UPDATE g2_bio_siswa SET
                        nama_siswa     	= '$nama',
                        email 		   	= '$email',
                        password 		= '$password'
                   		WHERE no_siswa  = '$no'");
	$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				echo "<script>document.location.href='$url'</script>";
}
}

?>