<ul class="nav navbar-nav">
<?php if($level == 'admin'){ ?>
		<li>
			<a href="logout.php">
			<i class="fa fa-danger"></i> <b><font color="yellow">LOGOUT !!!</font></b></a>
		</li>

		<li>
			<a href="index.php?halaman=Informasi"><font color="white">
			<i class="fa fa-user-md"></i> <b>Tambah Pengumuman</b></font></a>
		</li>

		<li>
			<a href="Semua-Data-Calon-Siswa"><font color="white">
			<i class="fa fa-info"></i> <b>Data Calon Siswa</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Nilai-TO"><font color="white">
			<i class="fa fa-info"></i> <b>Lihat Nilai</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Terima-TO"><font color="white">
			<i class="fa fa-info"></i> <b>Siswa Diterima</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Nilai"><font color="white">
			<i class="fa fa-info"></i> <b>Edit Nilai</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Cetak-Kartu"><font color="white">
			<i class="fa fa-info"></i> <b>Cetak Kartu</b></font></a>
		</li>
<?php /*
		<li>
			<a href="index.php?halaman=Tryout-Tertinggi"><font color="white">
			<i class="fa fa-info"></i> <b>Tryout Tertinggi</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Ruang"><font color="white">
			<i class="fa fa-info"></i> <b>Daftar Ruangan</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Cetak-Daftar-Siswa"><font color="white">
			<i class="fa fa-info"></i> <b>Cetak No Meja</b></font></a>
		</li> */ ?>

		<li>
			<a href="index.php?halaman=Export-Excel"><font color="white">
			<i class="fa fa-info"></i> <b>Cetak Pengumuman</b></font></a>
		</li>
<?php }else{ ?>

		<li>
			<a href="logout.php">
			<i class="fa fa-danger"></i> <b><font color="yellow">LOGOUT !!!</font></b></a>
		</li>

		<li>
			<a href="index.php?halaman=Informasi"><font color="white">
			<i class="fa fa-user-md"></i> <b>Tambah Pengumuman</b></font></a>
		</li>

		<li>
			<a href="Semua-Data-Calon-Siswa"><font color="white">
			<i class="fa fa-info"></i> <b>Data Calon Siswa</b></font></a>
		</li>

		<li>
			<a href="index.php?halaman=Export-Excel"><font color="white">
			<i class="fa fa-info"></i> <b>Cetak Pengumuman</b></font></a>
		</li>
<?php } ?>
	</ul>
