<?php
require'functions.php';

$id=$_GET["features"];
if(hapus($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_features.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_features.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>