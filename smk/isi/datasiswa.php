<div class='rightpanel'>
       <div class='pageheader'>
	     <a href='index.php?halaman=Tambah-Siswa' class='btn btn-primary'>Tambah Data Siswa</a>
       <hr>
       <h4>Lihat Data Berdasarkan Jurusan :</h4>
       <a href="index.php?halaman=TO"><button class="btn-sm btn-success">TO</button></a> | <a href="index.php?halaman=RPL"><button class="btn-sm btn-success">RPL</button></a>
       <a href="index.php?halaman=TPHP"><button class="btn-sm btn-success">TPHP</button></a> | <a href="index.php?halaman=TSM"><button class="btn-sm btn-success">TSM</button></a>
       <hr>
        	<div class='pageicon'><span class='iconfa-user'></span></div>
            <div class='pagetitle'>
                <h2>Data Semua Calon Siswa SMKN 1 Mejayan 2016/2017</h2>
            </div>
        </div><!--pageheader-->

        <div class='maincontent'>
            <div class='maincontentinner'>
			
		      <table id='datatable' class='table table-bordered' border="1">
                    <thead align="center">
                        <tr>
          <th>no</th>
          <th align="center">No. Siswa</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Asal Sekolah</th>
          <th>Jurusan</th>
          <th>No. HP</th>
		  <th>Aksi</th>
          </tr></thead><tbody>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM g2_bio_siswa order by no_siswa asc");

    $no = 1;
    while ($r=mysqli_fetch_array($tampil)){
    
      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>PSB-16-2-$r[no_siswa]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td>$r[jurusan]</td>
      <td>$r[telp]</td>
      <td class='center'><a href=index.php?halaman=Edit-Siswa&no=$r[no_siswa] title='Edit' class='btn-sm btn-info btn-circle'>
        Edit<i class='iconfa-pencil'></i></a> &nbsp;&nbsp;";
      
      if($level == 'admin'){ ?>
      <a href="isi/hapussiswa.php?no=<?php echo $r['no_siswa']; ?>" onclick="return confirm('Anda Yakin untuk Menghapus data ini?')"><button class="btn-sm btn-danger btn-circle">Hapus</button></a>
      <?php }else{
        echo "";
      }
      
      echo "</td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>