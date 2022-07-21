<?php
require'functions.php';

$id=$_GET["gallery"];
if(hapus3($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_gallery.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_gallery.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>