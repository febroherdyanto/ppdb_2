<?php
if(!isset($_SESSION['s_log'])){ ?>

<ul class="nav navbar-nav">
		<li>
			<a href="http://psbsmkn1mejayan.id/" target="_blank"><font color="white">
			<i class="fa fa-arrow-circle-left"></i> <b>Gelombang I</b></font></a>
		</li>
		<li>
			<a href="index.php?halaman=Profil-Sekolah"><font color="white">
			<i class="fa fa-user-md"></i> <b>Profil Sekolah</b></font></a>
		</li>
		<li>
			<a href="index.php?halaman=Alur-Pendaftaran"><font color="white">
			<i class="fa fa-line-chart"></i> <b>Alur Pendaftaran</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Daftar"><font color="white">
			<i class="fa fa-registered"></i> <b>Daftar</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Login"><font color="white">
			<i class="fa fa-sign-in"></i> <b>Login</b></font></a>
		</li>
		<li>
			<a href="index.php?halaman=Kirim-Pesan"><font color="white">
			<i class="fa fa-comments"></i> <b>Kirim Pesan</b></font></a>
		</li>
	</ul>
<?php }else{
	//Mencatat Info User saat login
	$user = "";
	if(isset($_SESSION['s_log'])){
		$s_no_siswa = $_SESSION['s_log']['s_no_siswa'];
		$nama = $_SESSION['s_log']['s_nama'];
	} ?>

<ul class="nav navbar-nav">
		<li>
			<a href="index.php?halaman=Profil-Sekolah"><font color="white">
			<i class="fa fa-user-md"></i> <b>Profil Sekolah</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Edit-Data"><font color="white">
			<i class="fa fa-list"></i> <b>Edit Data</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Edit-Nilai"><font color="white">
			<i class="fa fa-check"></i> <b>Data Nilai</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Edit-Kesehatan"><font color="white">
			<i class="fa fa-stethoscope"></i> <b>Data Kesehatan</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Profil"><font color="white">
			<i class="fa fa-user"></i> <b>User</b></font></a>
		</li>
		
		<li>
			<a href="index.php?halaman=Kirim-Pesan"><font color="white">
			<i class="fa fa-comments"></i> <b>Kirim Pesan</b></font></a>
		</li>

		<li>
			<a href="isi/logout.php"><font color="white">
			<i class="fa fa-sign-in"></i> <b>Logout</b></font></a>
		</li>
	</ul>
<?php } ?>
