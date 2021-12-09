 <style type="text/css">

body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}


.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}
.info{
	font-family: Arial;
}

 </style>

<div class="container">
    <div class="row">
<div class="col-md-12">
	<div class="col-md-4">
		<div class="form-login">
            <h4>Login Calon Siswa</h4>
            <form method="post" action="isi/ceklogin.php">
            <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="Masukkan No Pendaftaran" />
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Masukkan Password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button class="btn btn-primary btn-md" type="submit" name="login">Login <i class="fa fa-sign-in"></i></button>
            </span>
            </div>
            </div>
         </form>
	</div>

	<div class="col-md-8">
		<h3 class="info">Silahkan login menggunakan Nomor Pendaftaran dan Password yang disediakan oleh panitia ketika Anda daftar di Sistem kami..<br><hr>
		Belum Mendaftar? <a href="index.php?halaman=Daftar" style="text-decoration: none;">Daftar Disini</a><br>
		Baca dan Pahami <a href="index.php?halaman=Alur-Pendaftaran" style="text-decoration: none;">Alur Pendaftaran</a>
		</h3>
	</div>
</div>


    </div>
</div>