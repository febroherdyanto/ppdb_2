<script type="text/javascript" src="jquery-1.9.1.js"></script>


<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-list"></i> 
		PENDAFTARAN SISWA BARU GELOMBANG 2</h2>
</div>
<div class="panel-body">
<?php
if(isset($_POST['daftar'])){

//Mengecek Jika ada yang daftar TKR..
if($_POST['jurusan'] == 'TKR'){
	echo "<h2 align='center'><font color='red'><i class='fa fa-exclamation-triangle'></i>Mohon Maaf, Untuk Jurusan / Kompetensi Keahlian <br>'Teknik Kendaraan Ringan (TKR)' tidak dibuka untuk Gelombang II.<br>
	Silahkan Pilih Jurusan / Kompetensi Keahlian yang lain.. </font></h2><hr>";
}else{
	//Jika tidak memilih jurusan TKR

$qt = mysqli_query($koneksi,"select * from g2_bio_siswa order by no_siswa desc limit 1");
while($tt = mysqli_fetch_array($qt)){
	$trkr = $tt['no_siswa']+1;
	
	

//********** QUERY INPUT *********************//
	$nama = addslashes(strtoupper(trim($_POST['nama'])));
	$tempat = addslashes(strtoupper(trim($_POST['tempat'])));
	$tgl_lahir = addslashes(strtoupper(trim($_POST['tgl_lahir'])));
	$jenkel = addslashes(strtoupper(trim($_POST['jenkel'])));
	$telp = addslashes(strtoupper(trim($_POST['telp'])));
	$agama = addslashes(strtoupper(trim($_POST['agama'])));
	$nama_ayah = addslashes(strtoupper(trim($_POST['nama_ayah'])));
	$nama_ibu = addslashes(strtoupper(trim($_POST['nama_ibu'])));
	$asal_sekolah = addslashes(strtoupper(trim($_POST['asal_sekolah'])));
	$jurusan = addslashes(strtoupper(trim($_POST['jurusan'])));
	$username = "PSB-16-2-".$trkr;
	$foto = 'kosong.jpg';
function randpass($length){
    $string = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
    $len = strlen($string);

    for($i=1;$i<=$length; $i++){
        $start = rand(0, $len);
        $pass .= substr($string, $start, 1);
    }
    
    return $pass;
}

	$pass = "MJY_".randpass(5);
	$mdpass = md5($pass);
$query = mysqli_query($koneksi,"insert into g2_bio_siswa (no_siswa,nama_siswa,tempat_lahir,tgl_lahir,jenkel,telp,agama,nama_ayah,nama_ibu,asal_sekolah,jurusan,username,password,foto) values('$trkr','$nama','$tempat','$tgl_lahir','$jenkel','$telp','$agama','$nama_ayah','$nama_ibu','$asal_sekolah','$jurusan','$username','$mdpass','$foto')");
if($query == 1){
	mysqli_query($koneksi,"insert into g2_kesehatan (no_siswa,dis_tb,dis_bb,dis_bw) values('$trkr','N','N','N')");
	echo "<script>document.location.href='index.php?halaman=Berhasil-Daftar&usmk=$username&upwd=$pass'</script>";
}else{
	echo "<h1><font color='red'>PENDAFTARAN SISWA BARU GAGAL.. COBA LAGI NANTI</font></h1>";
}
//********************************************//


}}
}
?>

<div class="col col-sm-12">
	<div class="col col-sm-12" align="center"><b><i>Isilah Identitas dengan Benar dan Teliti..</i></b></div>
</div>

<form method="post" action="">

<div class="col col-sm-12">
	<div class="col col-sm-3">Nama Siswa</div>
	<div class="col col-sm-8"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Calon Siswa.." title="Masukkan Nama Calon Siswa.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Tempat, Tanggal Lahir</div>
	<div class="col col-sm-3"><input type="text" name="tempat" class="form-control"  placeholder="Masukkan Tempat Lahir.." title="Masukkan Tempat Lahir.." required></div>
	<div class="col col-sm-2"><input type="text" name="tgl_lahir" id="tanggal" class="form-control"  placeholder="Masukkan Tanggal Lahir.." title="Masukkan Tanggal Lahir.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Jenis Kelamin</div>
	<div class="col col-sm-3"><select name="jenkel" class="form-control">
		<option value='Laki-Laki' selected>Laki-Laki</option>
		<option value='Perempuan'>Perempuan</option>
	</select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">No HP</div>
	<div class="col col-sm-4"><input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor Telp / HP.." title="Masukkan Nomor Telp / HP.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Agama</div>
	<div class="col col-sm-3"><select name="agama" class="form-control">
		<option value="Islam" selected>Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		<option value="Katolik">Katolik</option>
		<option value="Khong Hu Cu">Khong Hu Cu</option></select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Nama Orang Tua</div>
	<div class="col col-sm-4">Ayah : <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah.." title="Masukkan Nama Ayah.." required></div>
	<div class="col col-sm-4">Ibu : <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu.." title="Masukkan Nama Ibu.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Asal Sekolah</div>
	<div class="col col-sm-4"><input type="text" name="asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah.." title="Masukkan Asal Sekolah.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Pilihan Jurusan</div>
	<div class="col col-sm-7"><select name="jurusan" class="form-control" title="Pilih Jurusan Anda..">
		<option value="TO" selected>Teknik Ototronik (TO)</option>
		<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
		<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
		<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
		<option value="TSM">Teknik Sepeda Motor (TSM)</option>
		</select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2"> </div>
	<div class="col col-sm-5"><button type="submit" name="daftar" class="btn btn-sm btn-primary">DAFTAR</button></div>
</div>

</form>

</div></div>

