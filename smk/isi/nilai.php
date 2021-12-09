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
          <th>Nilai</th>
		  <th>Aksi</th>
          </tr></thead><tbody>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM g2_bio_siswa order by rata_total desc");

    $no = $posisi+1;
    while ($r=mysqli_fetch_array($tampil)){
    
      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>PSB-16-2-$r[no_siswa]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td>$r[jurusan]</td>
      <td>$r[rata_total]</td>
      <td class='center'><a href=index.php?halaman=Edit-Nilai&no=$r[no_siswa] title='Edit' class='btn-sm btn-info btn-circle'>
        Edit<i class='iconfa-pencil'></i></a> &nbsp;&nbsp;";
      
      
      echo "</td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>