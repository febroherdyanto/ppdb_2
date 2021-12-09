<?php
//**********************************************************************
// Sumber : http://www.phpdevtips.com/2011/06/the-php-time-ago-function
// 
// Cara Penggunaan :
// <?php
// //Format tanggal YYYY/MM/DD HH:II:SS (Y/m/d H:i:s)
// $tanggal = "2015/11/01 19:30:12";
// echo yang_lalu($tanggal);
// ? >
//**********************************************************************
?>
<?php
function yang_lalu($tanggal){
	if(empty($tanggal)){
		return "Tanggal tidak tersedia";
	}

	$periode = array('detik','menit','jam','hari','minggu','bulan',
		'tahun','dekade');
	$panjang = array('60','60','24','7','4.35','12','10');


	$sekarang = time();

	$tgl_unik = strtotime($tanggal);
	if(empty($tgl_unik)){
		return "Bad date";
	}

	if($sekarang > $tgl_unik){
		$beda = $sekarang - $tgl_unik;
		$kalimat = 'yang lalu';
	}else{
		$beda = $tgl_unik-$sekarang;
		$kalimat = 'dari sekarang';
	}

	for($j=0; $beda>=$panjang[$j] && $j<count($panjang)-1; $j++){
		$beda /= $panjang[$j];
	}
	$beda = round($beda);

	if($beda >= 2){
		return "$beda $periode[$j] {$kalimat}";
	}else if($beda = 1){
		return "se$periode[$j] {$kalimat}";
	}
}

?>