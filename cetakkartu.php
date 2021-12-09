<?php
include 'asset/pdf/fpdf.php';
require_once 'config/koneksi.php';


$hash = trim($_GET['hash']);
	$x = explode("_", $hash);
	$xh = $x[0];
	$xmd5 = $x[1];
	$xno = $x[2];
$query = mysqli_query($koneksi,"select * from g2_bio_siswa where no_siswa='$xno'");
$t = mysqli_fetch_array($query);
	$extg = explode('-', $t['tgl_lahir']);
		$tahun = $extg[0];
		$bulan = $extg[1];
		$tgl = $extg[2];


$fpdf = new FPDF('P','mm',array(100,150));
$fpdf->Rect(5,10,200,115,'draw');
$fpdf->Rect(5,135,200,115,'draw');

$fpdf->Image('asset/pdf/twh.jpg',30,12,20,20,'jpg');
$fpdf->Image('asset/pdf/smk.jpg',157,12,20,20,'jpg');

$fpdf->SetFont('Times', '', '10');
$fpdf->Cell(0,7, 'KARTU PESERTA - CALON SISWA BARU', 0, 1, 'C');
$fpdf->Cell(0,1, 'PENJARINGAN SISWA BARU T/A 2016/2017', 0, 1, 'C');
$fpdf->SetFont('Times', 'B', '14');
$fpdf->Cell(0,8, 'SMK NEGERI 1 MEJAYAN', 0, 1, 'C');
$fpdf->SetFont('Times', '', '8');
$fpdf->Cell(0,0, 'Jl. Imam Bonjol No.7, Kel. Pandean, Kec. Mejayan, Kab. Madiun', 0, 1, 'C');
$fpdf->Cell(0,6, 'Telp. (0351) 388 490 Kodepos : 63153', 0, 1, 'C');
$fpdf->Cell(0,0, 'Website : http://psbsmkn1mejayan.id  Email : info@psbsmkn1mejayan.id', 0, 1, 'C');

$fpdf->Line(10,35,200,35);
$fpdf->Line(10,36,200,36);

$fpdf->Ln(10);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'No Pendaftaran','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': PSB-16-2-'.$xno,0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Nama Calon Siswa','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[nama_siswa],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Tempat, Tanggal Lahir','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[tempat_lahir].', '.$tgl.'-'.$bulan.'-'.$tahun,0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Jenis Kelamin','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[jenkel],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Asal Sekolah','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[asal_sekolah],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Komptensi Keahlian','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[jurusan],0,1);

$fpdf->Image('foto/'.$t[foto],
	150,55,25,31,'jpg');

$fpdf->Ln(4);
$fpdf->SetFont('Times', 'B', '10');
$fpdf->Cell(130,6,'*) KARTU INI HARAP DIBAWA PADA SAAT DATANG KE SMKN 1 MEJAYAN',1,'SM');
$fpdf->Cell(10,6,'  ',0,'SM');
$fpdf->SetFont('Times', 'I', '7');
$fpdf->Cell(25,6,'Foto',0,'SM','C');

$fpdf->Ln(10);
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(50,6,'Calon Siswa Baru',0,'SM','C');

$fpdf->Ln(19);
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(50,6,'(....................................................)',0,'SM','C');
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(80,6,' ',0,'SM','C');
$fpdf->Cell(40,6,'UNTUK CALON SISWA',1,'SM','C');



//********************************************************************************************
//********************************************************************************************
//********************************************************************************************

$fpdf->Ln(20);
$fpdf->Image('asset/pdf/twh.jpg',30,137,20,20,'jpg');
$fpdf->Image('asset/pdf/smk.jpg',157,137,20,20,'jpg');

$fpdf->SetFont('Times', '', '10');
$fpdf->Cell(0,7, 'KARTU PESERTA - CALON SISWA BARU', 0, 1, 'C');
$fpdf->Cell(0,1, 'PENJARINGAN SISWA BARU T/A 2016/2017', 0, 1, 'C');
$fpdf->SetFont('Times', 'B', '14');
$fpdf->Cell(0,8, 'SMK NEGERI 1 MEJAYAN', 0, 1, 'C');
$fpdf->SetFont('Times', '', '8');
$fpdf->Cell(0,0, 'Jl. Imam Bonjol No.7, Kel. Pandean, Kec. Mejayan, Kab. Madiun', 0, 1, 'C');
$fpdf->Cell(0,6, 'Telp. (0351) 388 490 Kodepos : 63153', 0, 1, 'C');
$fpdf->Cell(0,0, 'Website : http://psbsmkn1mejayan.id  Email : info@psbsmkn1mejayan.id', 0, 1, 'C');

$fpdf->Line(10,162,200,162);
$fpdf->Line(10,163,200,163);

$fpdf->Ln(10);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'No Pendaftaran','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': PSB-16-2-'.$xno,0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Nama Calon Siswa','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[nama_siswa],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Tempat, Tanggal Lahir','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[tempat_lahir].', '.$tgl.'-'.$bulan.'-'.$tahun,0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Jenis Kelamin','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[jenkel],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Asal Sekolah','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[asal_sekolah],0,1);

$fpdf->Ln(1);
$fpdf->SetFont('Arial', '', '10');
$fpdf->Cell(45,6,'Komptensi Keahlian','SM');
$fpdf->SetFont('Courier', '', '11');
$fpdf->Cell(140,6,': '.$t[jurusan],0,1);

$fpdf->Image('foto/'.$t[foto],
	150,180,25,31,'jpg');

$fpdf->Ln(4);
$fpdf->SetFont('Times', 'B', '10');
$fpdf->Cell(130,6,'*) KARTU INI HARAP DIBAWA PADA SAAT DATANG KE SMKN 1 MEJAYAN',1,'SM');
$fpdf->Cell(10,6,'  ',0,'SM');
$fpdf->SetFont('Times', 'I', '7');
$fpdf->Cell(25,6,'Foto',0,'SM','C');

$fpdf->Ln(10);
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(50,6,'Calon Siswa Baru',0,'SM','C');

$fpdf->Ln(19);
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(50,6,'(....................................................)',0,'SM','C');
$fpdf->SetFont('Times', '', '9');
$fpdf->Cell(80,6,' ',0,'SM','C');
$fpdf->Cell(40,6,'UNTUK PANITIA',1,'SM','C');



$fpdf->Output();
?>