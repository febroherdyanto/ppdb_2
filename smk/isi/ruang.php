<form method="post" action="">
	<input type="number" name="noruang">
	<input type="submit" name="cetak" value="Export ke Excel">
</form>

<?php
if(isset($_POST['cetak'])){
	$noruang = $_POST['noruang'];

	echo "<script>document.location.href='isi/print.php?no=$noruang'</script>";
}
?>