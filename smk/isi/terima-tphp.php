<div class='rightpanel'>
       <div class='pageheader'>
          <div class='pageicon'><span class='iconfa-user'></span></div>
            <div class='pagetitle'>

<!-- Lainnya -->
Lihat Nama Siswa Diterima di Jurusan Lain ! <br>
<a href="index.php?halaman=Terima-TO"><button class="btn-sm btn-danger">TO</button></a> | 
<a href="index.php?halaman=Terima-RPL"><button class="btn-sm btn-primary">RPL</button></a> | 
<a href="index.php?halaman=Terima-TPHP"><button class="btn-sm btn-success">TPHP</button></a> | 
<a href="index.php?halaman=Terima-TSM"><button class="btn-sm btn-warning">TSM</button></a>
<!-- ./lainnya -->

                <h2>Siswa diterima di Jurusan TPHP</h2>
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
          <th>Nilai</th>
          <th>Diterima/Tidak</th>
      <th>Aksi</th>
          </tr></thead><tbody>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM g2_bio_siswa WHERE jurusan='TPHP' AND diterima='Y' ORDER BY rata_total DESC LIMIT 90");

    $no = $posisi+1;
    while ($r=mysqli_fetch_array($tampil)){
    
      echo "<tr>
      <td class='left' width='25'>$no</td>
      <td>PSB-16-2-$r[no_siswa]</td>
      <td>$r[nama_siswa]</td>
      <td>$r[jenkel]</td>
      <td>$r[asal_sekolah]</td>
      <td>$r[rata_total]</td>
      <td>$r[diterima]</td>
      <td class='center'>";

$getterima = $_GET['halaman'];

        if($r['diterima'] == 'N'){
      echo "<a href=isi/pilihterima.php?no=$r[no_siswa]&hal=$getterima class='btn-sm btn-success btn-circle'>v</a>";
        }else{
          echo "<a href=isi/batalterima.php?no=$r[no_siswa]&hal=$getterima class='btn-sm btn-danger btn-circle'>x</a>";
        }
      echo "</td>
               </tr>";
    $no++;
    }

    echo "</tbody></table>";
    ?>