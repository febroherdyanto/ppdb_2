<div class='rightpanel'>
       <div class='pageheader'>
	     <a href='index.php?halaman=Tambah-Siswa' class='btn btn-primary'>Tambah Data Siswa</a>
       <hr>
        	<div class='pageicon'><span class='iconfa-user'></span></div>
            <div class='pagetitle'>
                <h2>Edit Data Nilai Calon Siswa</h2>
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
          <th>Jenkel</th>
          <th>Asal Sekolah</th>
          <th>Jurusan</th>
          <th>Foto</th>
		  <th>Aksi</th>
          </tr></thead><tbody>
    <?php



    function randpass($length){
    $string = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $len = strlen($string);

    for($i=1;$i<=$length; $i++){
        $start = rand(0, $len);
        $pass .= substr($string, $start, 1);
    }
    
    return $pass;
}
$hash = randpass(10);
$md5 = md5($r['no_siswa']);
echo " ";




    $tampil=mysqli_query($koneksi,"SELECT * FROM g2_bio_siswa order by no_siswa asc");

    $no = $posisi+1;
    while ($r=mysqli_fetch_array($tampil)){






      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>PSB-16-2-$r[no_siswa]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td>$r[jurusan]</td>
      <td>$r[foto]</td>
      <td class='center'><a href='../cetakkartu.php?hash=".$hash."_".$md5."_".$r['no_siswa']."' target='_blank' style='textdecoration:none;'><button class='btn btn-sm btn-success'><i class='fa fa-print'></i> CETAK KARTU</button></a>";
      
      
      echo "</td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>