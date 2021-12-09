<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil Logout..');
	document.location.href='login/';</script>";
?>
<script type="text/javascript" src="../asset/js/jquery-1.9.1.js"></script>