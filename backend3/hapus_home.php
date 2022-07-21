<?php
require'functions.php';

$id=$_GET["home"];
if(hapus2($id)>0){
	echo"
	<script>
		alert('data Deleted');
		document.location.href='Tabel_home.php';
	</script>
		";
}
else{
	echo"
	<script>
		alert('data cant deleted');
		document.location.href='Tabel_home.php';
	</script>";
	echo"<br";
	echo mysqli_error($conn);
}
?>