<div class="panel panel-success">
<div class="panel-heading">
	<h2 class="panel-title" align="center"><i class="fa fa-comments"></i> 
		KIRIM PESAN KEPADA ADMIN</h2>
</div>
<div class="panel-body">
<center><h2>Kirim Pesan Kepada Administrator Website !</h2></center>

<font color="red"><h3 align="center">HARAP MASUKKAN EMAIL DAN NOMOR HP YANG BENAR.<br>AGAR BISA DIBALAS DENGAN ADMINISTRATOR</h3></font>
<div class="col-md-7">
	<form action="" method="post">
		<div class="col-sm-12" align="right">
			<div class="col-sm-4"><label for="nama"><font color="red"><b>*</b></font> Nama Anda</label></div>
			<div class="col-sm-8"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda..." required></div>
		</div>
		<div class="col-sm-12" align="right">
			<div class="col-sm-4"><label for="email"><font color="red"><b>*</b></font> Email</label></div>
			<div class="col-sm-8"><input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda..." required></div>
		</div>
		<div class="col-sm-12" align="right">
			<div class="col-sm-4"><label for="hp"><font color="red"><b>*</b></font> No HP</label></div>
			<div class="col-sm-8"><input type="text" name="hp" class="form-control" placeholder="Masukkan Nomor HP (08xxxxxxx)..." required></div>
		</div>
		<div class="col-sm-12" align="right">
			<div class="col-sm-4"><label for="judul"><font color="red"><b>*</b></font> Judul Pesan</label></div>
			<div class="col-sm-8"><input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Pesan..." required></div>
		</div>
		<div class="col-sm-12" align="right">
			<div class="col-sm-4"><label for="isi"><font color="red"><b>*</b></font> Isi Pesan</label></div>
			<div class="col-sm-8"><textarea name="isi" id="" rows="4" class="form-control" placeholder="Masukkan Isi Pesan Anda..." required></textarea></div>
		</div>
		<div class="col-sm-12" align="center"><button class="btn btn-success btn-md" type="submit" name="kirim"><i class="fa fa-send"></i> Kirim Pesan</button></div>
	</form>
</div>

<?php
if(isset($_POST['kirim'])){
	$name=addslashes($_POST['nama']);
	$email=addslashes($_POST['email']);
	$hp=addslashes($_POST['hp']);
	$subject=addslashes($_POST['judul']);
	$message=addslashes($_POST['isi']);

	$to='info@psbsmkn1mejayan.id';

	$message="Dari : $name <br>Email : $email <br> Nomor HP : $hp<hr>".$message;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// More headers
	$headers .= 'From: '.$name."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
	@mail($to,$subject,$message,$headers);
	if(@mail) { echo "Pesan Berhasil <b>DIKIRIM</b><br>Tunggu Email Balasan !";	}else{ echo "GAGAL DIKIRIM";}
}
?>


</div>
</div>