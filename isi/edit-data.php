<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-edit"></i> 
			Edit Data Siswa</h2>
</div>
<div class="panel-body">

<?php
function randpass($length){
    $string = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $len = strlen($string);

    for($i=1;$i<=$length; $i++){
		$pass = '';
        $start = rand(0, $len);
        $pass .= substr($string, $start, 1);
    }
    
    return $pass;
}
$hash = randpass(10);
$md5 = md5($s_no_siswa);
echo "<a href='cetakkartu.php?hash=".$hash."_".$md5."_".$s_no_siswa."' target='_blank' style='textdecoration:none;'><button class='btn btn-md btn-success'><i class='fa fa-print'></i> CETAK KARTU</button></a> ";

?>






<?php

if(isset($_POST['simpan'])){
//Mengecek Jika ada yang daftar TKR..
if($_POST['jurusan'] == 'TKR'){
	echo "<h2 align='center'><font color='red'><i class='fa fa-exclamation-triangle'></i>Mohon Maaf, Untuk Jurusan / Kompetensi Keahlian <br>'Teknik Kendaraan Ringan (TKR)' tidak dibuka untuk Gelombang II.<br>
	Silahkan Pilih Jurusan / Kompetensi Keahlian yang lain.. </font></h2><hr>";
}else{

	//--- FOTO ----
      $namafoto       = $_FILES['ufoto']['name'];
      $lokasi_file2   = $_FILES['ufoto']['tmp_name'];
      $tipe_file      = $_FILES['ufoto']['type'];
      $size           = $_FILES['ufoto']['size'];
      $max_size       = 1024 * 250;

	//Jika tidak memilih jurusan TKR
	$no = addslashes(strtoupper(trim($_POST['no_siswa'])));
	$nama = addslashes(strtoupper(trim($_POST['nama'])));
	$tempat = addslashes(strtoupper(trim($_POST['tempat'])));
	$tgl_lahir = addslashes(strtoupper(trim($_POST['tgl_lahir'])));
	$jenkel = addslashes(strtoupper(trim($_POST['jenkel'])));
	$telp = addslashes(strtoupper(trim($_POST['telp'])));
	$agama = addslashes(strtoupper(trim($_POST['agama'])));
	$nama_ayah = addslashes(strtoupper(trim($_POST['nama_ayah'])));
	$nama_ibu = addslashes(strtoupper(trim($_POST['nama_ibu'])));
	$pekerjaan_ayah = addslashes(strtoupper(trim($_POST['pekerjaan_ayah'])));
	$pekerjaan_ibu = addslashes(strtoupper(trim($_POST['pekerjaan_ibu'])));
	$asal_sekolah = addslashes(strtoupper(trim($_POST['asal_sekolah'])));
	$jurusan = addslashes(strtoupper(trim($_POST['jurusan'])));
	$alamat = addslashes(strtoupper(trim($_POST['alamat'])));


	//Jika Foto tidak dirubah
	if (empty($lokasi_file2)){

	$query = mysqli_query($koneksi,"update g2_bio_siswa set nama_siswa='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl_lahir', jenkel='$jenkel', telp='$telp', agama='$agama', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', alamat='$alamat', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', jurusan='$jurusan' where no_siswa='$no' ");
	if($query == 1){
		$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
		echo "<script>document.location.href='$url'</script>";
		echo "<h2>Data Tersimpan</h2>";
	}else{
		echo "GAGAL DISIMPAN ".mysqli_error($koneksi);
	}


	//Jika Foto dirubah
	}else{
      //----------------------------------------------

      if ($tipe_file != "image/jpg"
        //Untuk Max Size 
        AND $size >= $max_size){
          echo "<h3 style='color:red;'>Mohon Maaf, Tipe/Ekstensi File Anda Bukan *.jpg atau mungkin ukuran file yang Anda unggah melebihi batas 200KB</h3><hr>";
      }else{
            //Unlink Foto Lama ----
            $qg = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$s_no_siswa'");
            $g = mysqli_fetch_array($qg);
              $gmbr = $g['foto'];
            
            if($gmbr == ''){
            	//Upload Foto baru----
            $newname = "PSB-16-2-".$s_no_siswa.".jpg";
            move_uploaded_file($lokasi_file2,"foto/".$newname);
            echo " & Foto Baru Berhasil di Upload";
            $url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				echo "<script>document.location.href='$url'</script>";
            //insert ke tabel
            $qed_pg = mysqli_query($koneksi,"update g2_bio_siswa set nama_siswa='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl_lahir', jenkel='$jenkel', telp='$telp', agama='$agama', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', alamat='$alamat', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', jurusan='$jurusan', foto='$newname' where no_siswa='$no' ");

            if($qed_pg == 1){
                $url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				echo "<script>document.location.href='$url'</script>";
				
            }else{
              echo 'GAGAL DISIMPAN.. '.mysqli_error($koneksi);
            }
            //Jika gambar pernah ada
        	}else{
              $hps = unlink("foto/".$gmbr);
              if($hps == 1){
                echo "Berhasil Hapus Gambar";
                $url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				echo "<script>document.location.href='$url'</script>";
              }else{
                echo "GAGAL Hapus Gambar".mysqli_error($koneksi);
              }

            //Upload Foto baru----
            $newname = "PSB-16-2-".$s_no_siswa.".jpg";
            move_uploaded_file($lokasi_file2,"foto/".$newname);
            echo " & Foto Baru Berhasil di Upload";
            //insert ke tabel
            $qed_pg = mysqli_query($koneksi,"update g2_bio_siswa set nama_siswa='$nama', tempat_lahir='$tempat', tgl_lahir='$tgl_lahir', jenkel='$jenkel', telp='$telp', agama='$agama', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', alamat='$alamat', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', jurusan='$jurusan', foto='$newname' where no_siswa='$no' ");

            if($qed_pg == 1){
                $url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
				//echo "<script>document.location.href='$url'</script>";
				echo "BERHASIL";
            }else{
              echo 'GAGAL DISIMPAN.. '.mysqli_error($koneksi);
            }
        	}//Penutup gambar ada
          }
        }
}
}
?>




<div class="col col-sm-12">
	<div class="col col-sm-12" align="center"><b><i><h3>Isilah Identitas dengan Benar dan Teliti..</i></b></h3></div>
</div>

<?php
$qt = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='".$s_no_siswa."'");
while($t = mysqli_fetch_array($qt)){
?>
<div class="col col-sm-12" align="center">
	<?php if($t['foto'] == ''){ ?>
		<img src="foto/kosong.jpg" height="100px" width="100px" class="img-responsive"><br>
		<font color="green" style="font-weight: bold;">FOTO BELUM DIUNGGAH..</font>
	<?php }else{ ?>
		<img width="150px" height="170px" src="foto/<?php echo $t['foto']; ?>">
	<?php } ?>
</div>
<hr>
<form method="post" action="" enctype="multipart/form-data">

<div class="col col-sm-12">
	<div class="col col-sm-3">No Siswa</div>
	<div class="col col-sm-4"><input type="text"class="form-control" value="PSB-16-2-<?php echo $s_no_siswa ?>" readonly required> <input type="text" name="no_siswa" value="<?php echo $s_no_siswa ?>" hidden></input></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Nama Siswa</div>
	<div class="col col-sm-8"><input type="text" name="nama" class="form-control" value="<?php echo $t['nama_siswa']; ?>" placeholder="Masukkan Nama Calon Siswa.." title="Masukkan Nama Calon Siswa.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Tempat, Tanggal Lahir</div>
	<div class="col col-sm-3"><input type="text" name="tempat" class="form-control" value="<?php echo $t['tempat_lahir']; ?>" placeholder="Masukkan Tempat Lahir.." title="Masukkan Tempat Lahir.." required></div>
	<div class="col col-sm-2"><input type="text" name="tgl_lahir" id="tanggal" class="form-control" value="<?php echo $t['tgl_lahir']; ?>" placeholder="Masukkan Tanggal Lahir.." title="Masukkan Tanggal Lahir.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Jenis Kelamin</div>
	<div class="col col-sm-3"><select name="jenkel" class="form-control">
		<?php if($t['jenkel'] == 'Laki-Laki'){
			echo "<option value='Laki-Laki' selected>Laki-Laki</option>
				<option value='Perempuan'>Perempuan</option>";
		}else{
			echo "<option value='Laki-Laki'>Laki-Laki</option>
				<option value='Perempuan' selected>Perempuan</option>";
				}?>
	</select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">No HP</div>
	<div class="col col-sm-4"><input type="text" name="telp" class="form-control" value="<?php echo $t['telp']; ?>" placeholder="Masukkan Nomor Telp / HP.." title="Masukkan Nomor Telp / HP.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Agama</div>
	<div class="col col-sm-3"><select name="agama" class="form-control"><?php
		if($t['agama'] == 'Islam'){
		echo '<option value="Islam" selected>Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($t['agama'] == 'Kristen'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen" selected>Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($t['agama'] == 'Hindu'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu" selected>Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($t['agama'] == 'Budha'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha" selected>Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($t['agama'] == 'Katolik'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik" selected>Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}else if($t['agama'] == 'Khong Hu Cu'){
		echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu" selected>Khong Hu Cu</option>';
		}else{
			echo '<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
			<option value="Khong Hu Cu">Khong Hu Cu</option>';
		}
		?></select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Nama Orang Tua</div>
	<div class="col col-sm-4">Ayah : <input type="text" name="nama_ayah" class="form-control" value="<?php echo $t['nama_ayah']; ?>" placeholder="Masukkan Nama Ayah.." title="Masukkan Nama Ayah.." required></div>
	<div class="col col-sm-4">Ibu : <input type="text" name="nama_ibu" class="form-control" value="<?php echo $t['nama_ibu']; ?>" placeholder="Masukkan Nama Ibu.." title="Masukkan Nama Ibu.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Alamat Rumah</div>
	<div class="col col-sm-8"><textarea name="alamat" class="form-control" cols="100%" rows="1" placeholder="Masukkan Alamat Rumah.." title="Masukkan Alamat Rumah.." required><?php echo $t['alamat']; ?></textarea></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Pekerjaan Orang Tua</div>
	<div class="col col-sm-4">Ayah : <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $t['pekerjaan_ayah']; ?>" placeholder="Masukkan Pekerjaan Ayah.." title="Masukkan Pekerjaan Ayah.." required></div>
	<div class="col col-sm-4">Ibu : <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $t['pekerjaan_ibu']; ?>" placeholder="Masukkan Pekerjaan Ibu.." title="Masukkan Pekerjaan Ibu.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Asal Sekolah</div>
	<div class="col col-sm-4"><input type="text" name="asal_sekolah" class="form-control" value="<?php echo $t['asal_sekolah']; ?>" placeholder="Masukkan Asal Sekolah.." title="Masukkan Asal Sekolah.." required></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Pilihan Jurusan</div>
	<div class="col col-sm-5"><select name="jurusan" class="form-control" title="Pilih Jurusan Anda..">
		<?php
		if($t['jurusan'] == 'TO'){
		echo	'<option value="TO" selected>Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
			<option value="TSM">Teknik Sepeda Motor (TSM)</option>';
		}else if($t['jurusan'] == 'RPL'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL" selected>Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
			<option value="TSM">Teknik Sepeda Motor (TSM)</option>';
		}else if($t['jurusan'] == 'TPHP'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP" selected>Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
			<option value="TSM">Teknik Sepeda Motor (TSM)</option>';
		}else if($t['jurusan'] == 'TKR'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR" selected>Teknik Kendaraan Ringan (TKR)</option>
			<option value="TSM">Teknik Sepeda Motor (TSM)</option>';
		}else if($t['jurusan'] == 'TSM'){
		echo	'<option value="TO">Teknik Ototronik (TO)</option>
			<option value="RPL">Rekayasa Perangkat Lunak (RPL)</option>
			<option value="TPHP">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
			<option value="TKR">Teknik Kendaraan Ringan (TKR)</option>
			<option value="TSM" selected>Teknik Sepeda Motor (TSM)</option>';
		} ?>
		</select></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-3">Ubah Foto</div>
	<div class="col col-sm-5"><input type="file" class="form-control" title="Unggah Foto Berseragam.." name="ufoto"></input></div>
	<div class="col col-sm-4" style="color: red; font-weight: bold;">*Foto Berseragam, Berekstensi/Format .JPG, Ukuran Maksimal 200KB</div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2"> </div>
	<div class="col col-sm-5"><button type="submit" name="simpan" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> SIMPAN</button></div>
</div>
</form>
<?php } ?>
</div></div>

