<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-alert"></i> 
		BERHASIL DAFTAR CALON SISWA BARU</h2>
</div>
<div class="panel-body">
<?php
$usmk = $_GET['usmk'];
$pass = $_GET['upwd'];
$q = mysqli_query($koneksi,"select * from g2_bio_siswa where username='$usmk'");
while($t = mysqli_fetch_array($q)){ ?>
<h2>Selamat, <font color="blue"><?php echo $t['nama_siswa']; ?></font> sudah terdaftar di Website PSB SMKN 1 Mejayan [GELOMBANG II]<br>
<center>Username / Nomor Pendaftaran : <font color="red"><?php echo $usmk ?></font><br>
Password : <font color="red"> <?php echo $pass; ?></font></center></h2>
<h3><font color="red">* </font>Harap Catat dengan TELITI. Username dan Password akan digunakan untuk Login PSB Mengisi Data dan Tes Online Berikutnya..</h3>
<?php  } ?>
</div></div>