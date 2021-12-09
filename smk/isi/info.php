<h3><b>Ubah Pengumuman untuk ditampilkan di Halaman Website</b></h3>
<hr><hr>
<?php
	$user = "";
	if(isset($_SESSION['psbsmk'])){
		$kode_user = $_SESSION['psbsmk']['kode_user'];
		$nama = $_SESSION['psbsmk']['nama'];
		$level = $_SESSION['psbsmk']['level'];
	}
?>


<h4>Pengumuman Jalan</h4>
<form method="post" action="">
	<input type="text" placeholder="Pengumuman Untuk Halaman Utama - Jalan" title="Pengumuman Untuk Halaman Utama - Jalan" name="jalan" size="100%" class="form-control" value="<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='jalan'"); while($tampil = mysqli_fetch_array($querytampil)){ echo strip_tags($tampil['isi']); }?>">
	<center><input type="submit" name="sjalan" class="btn btn-sm btn-primary" value="UBAH"></center>
</form>
<?php
if(isset($_POST['sjalan'])){
	$isi = addslashes(trim(nl2br($_POST['jalan'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='jalan'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>
<hr>

<h4>Pengumuman Untuk Halaman Utama</h4>
<form method="post" action="">
<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='utama'");
while($tampil = mysqli_fetch_array($querytampil)){ ?>
	<textarea class="form-control" name="utama" rows="2" placeholder="Pengumuman Untuk Halaman Utama Website" title="Pengumuman Untuk Halaman Utama Website" id="pengumuman1" required><?php echo strip_tags($tampil['isi']); ?></textarea> <?php } ?>
	<center><button type="submit" name="sutama" class="btn-sm btn-primary">UBAH</button></center>
</form>
<?php
if(isset($_POST['sutama'])){
	$isi = addslashes(trim(nl2br($_POST['utama'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='utama'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>


<hr>
<h4>Pengumuman Untuk Halaman Pengumuman TO</h4>
<form method="post" action="">
<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='to'");
while($tampil = mysqli_fetch_array($querytampil)){ ?>
	<textarea class="form-control" name="to" rows="2" placeholder="Pengumuman Untuk Halaman Pengumuman TO" title="Pengumuman Untuk Halaman Pengumuman TO" id="pengumuman2" required><?php echo strip_tags($tampil['isi']); ?></textarea><?php } ?>
	<center><button type="submit" name="sto" class="btn-sm btn-primary">UBAH</button></center>
</form>
<?php
if(isset($_POST['sto'])){
	$isi = addslashes(trim(nl2br($_POST['to'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='to'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>


<hr>



<h4>Pengumuman Untuk Halaman Pengumuman RPL</h4>
<form method="post" action="">
<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='rpl'");
while($tampil = mysqli_fetch_array($querytampil)){ ?>
	<textarea class="form-control" name="rpl" rows="2" placeholder="Pengumuman Untuk Halaman Pengumuman RPL" title="Pengumuman Untuk Halaman Pengumuman RPL" id="pengumuman3" required><?php echo strip_tags($tampil['isi']); ?></textarea><?php } ?>
	<center><button type="submit" name="srpl" class="btn-sm btn-primary">UBAH</button></center>
</form>
<?php
if(isset($_POST['srpl'])){
	$isi = addslashes(trim(nl2br($_POST['rpl'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='rpl'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>


<hr>



<h4>Pengumuman Untuk Halaman Pengumuman TPHP</h4>
<form method="post" action="">
<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='tphp'");
while($tampil = mysqli_fetch_array($querytampil)){ ?>
	<textarea class="form-control" name="tphp" rows="2" placeholder="Pengumuman Untuk Halaman Pengumuman TPHP" title="Pengumuman Untuk Halaman Pengumuman TPHP" id="pengumuman4" required><?php echo strip_tags($tampil['isi']); ?></textarea><?php } ?>
	<center><button type="submit" name="stphp" class="btn-sm btn-primary">UBAH</button></center>
</form>
<?php
if(isset($_POST['stphp'])){
	$isi = addslashes(trim(nl2br($_POST['tphp'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='tphp'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>


<hr>


<h4>Pengumuman Untuk Halaman Pengumuman TKR</h4>
<form method="post" action="">
<?php $querytampil = mysqli_query($koneksi,"select * from info where untuk='tkr'");
while($tampil = mysqli_fetch_array($querytampil)){ ?>
	<textarea class="form-control" name="tkr" rows="2" placeholder="Pengumuman Untuk Halaman Pengumuman TKR" title="Pengumuman Untuk Halaman Pengumuman TKR" id="pengumuman5" required><?php echo strip_tags($tampil['isi']); ?></textarea><?php } ?>
	<center><button type="submit" name="stkr" class="btn-sm btn-primary">UBAH</button></center>
</form>
<?php
if(isset($_POST['stkr'])){
	$isi = addslashes(trim(nl2br($_POST['tkr'])));
	$query = mysqli_query($koneksi,"update info set isi='$isi', kode_user='$kode_user' where untuk='tkr'");
	if($query == 1){
		echo "<script>document.location.href='index.php?halaman=Informasi';</script>";
	}
}
?>

