<div class="panel panel-primary">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-stethoscope"></i> 
		EDIT KESEHATAN</h2>
</div>


<?php
$qt = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='".$s_no_siswa."'");
while($t = mysqli_fetch_array($qt)){
?>
<div class="panel-body">
<form method="post" action="">
<div class="col col-sm-12">
	<div class="col col-sm-2">Nama Siswa</div>
	<div class="col col-sm-8"><input type="text" class="form-control" placeholder="Masukkan Nama Lengkap.." title="Nama Siswa.." name="nama" value="<?php echo $t['nama_siswa']; } ?>" disabled ></input></div>
</div>
<?php
$qt = mysqli_query($koneksi,"select * from g2_kesehatan where no_siswa='".$s_no_siswa."'");
$q = mysqli_fetch_array($qt);
$dis_tb = $q['dis_tb'];
$dis_bb = $q['dis_bb'];
$dis_bw = $q['dis_bw'];
?>
<div class="col col-sm-12">
	<div class="col col-sm-2">Tinggi Badan</div>
	<div class="col col-sm-2"><input type="number" maxlength="3" class="form-control" placeholder="Tinggi Badan" name="tb" value="<?php echo $q['tinggi_badan']; ?>" <?php if($dis_tb == 'N'){echo ' title="Masukkan Tinggi Badan.."';}else{ echo ' title="Masukkan Tinggi Badan.." readonly';} ?> required></input></div>
	<div class="col col-md-1" style="font-size: 20px;">cm</div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2">Berat Badan</div>
	<div class="col col-sm-2"><input type="number" maxlength="3" class="form-control" placeholder="Berat Badan" name="bb" value="<?php echo $q['berat_badan']; ?>" <?php if($dis_bb == 'N'){echo '  title="Masukkan Berat Badan.."';}else{ echo ' title="Masukkan Berat Badan.." readonly';} ?> required></input></div>
	<div class="col col-md-1" style="font-size: 20px;">kg</div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2">Buta Warna</div>
	<div class="col col-sm-2"><select name="bw" class="form-control" <?php if($dis_bw == 'N'){echo '';}else{ echo ' disabled';} ?> >
	<?php if($q['buta_warna'] == 'YA'){
		echo '<option value="YA" selected>YA</option>
			<option value="SEBAGIAN">SEBAGIAN</option>
			<option value="TIDAK">TIDAK</option>';
		}else if($q['buta_warna'] == 'SEBAGIAN'){
		echo '<option value="YA">YA</option>
			<option value="SEBAGIAN" selected>SEBAGIAN</option>
			<option value="TIDAK">TIDAK</option>';
		}else{
		echo '<option value="YA">YA</option>
			<option value="SEBAGIAN">SEBAGIAN</option>
			<option value="TIDAK" selected>TIDAK</option>';
		}?>
	</select></input></div>
</div>
<input type="text" name="bw1" value="<?php echo $q['buta_warna']; ?>" hidden></input>
<div class="col col-sm-12">
	<div class="col col-sm-2">Riwayat Penyakit</div>
	<div class="col col-sm-5"><textarea name="riwayat" class="form-control" cols="6" rows="1"><?php echo $q['riwayat']; ?></textarea></div>
</div>
<div class="col col-sm-12">
	<div class="col col-sm-2"></div>
	<div class="col col-sm-8"><button type="submit" class="btn btn-sm btn-primary" name="simpan"><i class="fa fa-save"></i> SIMPAN</button></div>
</div>
</form>


</div></div>

<?php
if(isset($_POST['simpan'])){
	$tb = addslashes(trim($_POST['tb']));
	$bb = addslashes(trim($_POST['bb']));
	$bw = addslashes(trim($_POST['bw']));
	$bw1 = addslashes(trim($_POST['bw1']));
	$riwayat = addslashes(trim($_POST['riwayat']));

	if($dis_bw == 'Y'){
		$query =  mysqli_query($koneksi,"update g2_kesehatan set tinggi_badan='$tb', berat_badan='$bb', buta_warna='$bw1', riwayat='$riwayat' where no_siswa='$s_no_siswa' ");
		if($query == 1){
			$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
			echo "<script>document.location.href='$url'</script>";
		}else{
			echo "GAGAL DISIMPAN";
		}
	}else{
		$query =  mysqli_query($koneksi,"update g2_kesehatan set tinggi_badan='$tb', berat_badan='$bb', buta_warna='$bw', riwayat='$riwayat' where no_siswa='$s_no_siswa' ");
		if($query == 1){
			$url='http://'.$_SERVER['HTTP_HOST'].''. $_SERVER['REQUEST_URI'].'';
			echo "<script>document.location.href='$url'</script>";
		}else{
			echo "GAGAL DISIMPAN";
		}
	}
}
?>