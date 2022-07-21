<?php
//membuat koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "lpion");

 $sql = "SELECT * FROM home";
 $exe = mysqli_query($conn, $sql);
 $gambar = "SELECT * FROM razermodels";
 $exe2 = mysqli_query($conn,$gambar);
 $inter = "SELECT * FROM interviewees";
 $exe3 = mysqli_query($conn,$inter);
 $team = "SELECT * FROM team";
 $exe4 = mysqli_query($conn,$team);
 $sql1 = "SELECT * FROM features";
 $exe1 = mysqli_query($conn,$sql1);
//var_dump($exe);
 //$mhs= mysqli_fetch_row($exe);
 //$mhs= mysqli_fetch_assoc($exe);
 //$mhs= mysqli_fetch_array($exe);
//$mhs= mysqli_fetch_object($exe);
  //var_dump($mhs->Nama);
 /*while ($mhs=mysqli_fetch_assoc($exe)) {
 	var_dump($mhs);

 }*/
/*
 
 */
function hapus($features){
 	global $conn;
 	$query="delete from features where idfeatures=$features";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapus2($home)
 {
 	global $conn;
 	$query="delete from home where idhome=$home";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapus3($gallery)
 {
 	global $conn;
 	$query="delete from razermodels where no=$gallery";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }
 function hapus4($admin)
 {
	global $conn;
	$query="delete from admin where iduser=$admin";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
 }
 function tambah ($data){
 	global $conn;

 	$title_features=htmlspecialchars($data["title_features"]);
 	$features=htmlspecialchars($data["features"]);
 	//$gambar=htmlspecialchars($data["gambar"]);

	//$gambar=htmlspecialchars($data["gambar"]);

 	/*$gambar=upload();
 	if(!$gambar)
 	{
 		return false;
 	}*/

 	$query= "INSERT INTO features
 				VALUES ('', '$title_features', '$features','')";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 function tambah2 ($data){
 	global $conn;

 	$title_beranda=htmlspecialchars($data["title_beranda"]);
 	$berandaa=htmlspecialchars($data["berandaa"]);
 	//$gambar=htmlspecialchars($data["gambar"]);

	//$gambar=htmlspecialchars($data["gambar"]);

 	/*$gambar=upload();
 	if(!$gambar)
 	{
 		return false;
 	}*/

 	$query= "INSERT INTO home
 				VALUES ('','$title_beranda', '$berandaa','')";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 function tambah3($data)
 {
 	global $conn;
 	//$title_beranda=htmlspecialchars($data["title_beranda"]);
 	$nama=htmlspecialchars($data["Nama"]);
 	$gambar=htmlspecialchars($data['gambar']);
 	//$berandaa=htmlspecialchars($data["berandaa"]);

	//$gambar=htmlspecialchars($data["gambar"]);

 	$gambar=upload();
 	if(!$gambar)
 	{
 		return false;
 	}

 	$query= "INSERT INTO razermodels
 				VALUES ('', '$gambar','$nama')";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 function form ($data)
 {
 	global $conn;

 	$name=htmlspecialchars($data["name"]);
 	$email=htmlspecialchars($data["email"]);
 	$subject=htmlspecialchars($data["subject"]);
 	$message=htmlspecialchars($data["message"]);
 	//$gambar=htmlspecialchars($data["gambar"]);

 	$query= "INSERT INTO form
 				VALUES ('','$name', '$email', '$subject', '$message')";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }

 function query($sql)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $sql);
 	$row=null;
 	while($data=mysqli_fetch_array($exe))
 	{
 		$row[]=$data;
 	}
 	return $row;
 }
 function query2($gambar)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $gambar);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function query3($inter)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $inter);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function query4($team)
 {
 	global $conn;
 	$exe=mysqli_query($conn, $team);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
 		$row[]=$data;
 	}
 	return $row;
 }
 function register($data)
 {
 	global $conn;
 	$name=htmlspecialchars($data['name']);
 	$username = strtolower(stripcslashes($data['username']));
 	$email=htmlspecialchars($data['email']);
 	$password = mysqli_real_escape_string($conn, $data['password']);
 	$password2 = mysqli_real_escape_string($conn, $data['password2']);
 	//cek username
 	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

 	//cek kondisi line 175 bernilai true
 	
 	if(mysqli_fetch_assoc($result)) 
 	{
 		echo 
 		"
 			<script>
 				alert('username invalid');
 			</script>
 		";
 		//agar proses insert gagal
 		return false;
 	}
 	//cek konfirmasi password
 	if ($password !== $password2) 
 	{
 		echo 
 		"
 			<script>
 				alert('password invalid');
 			</script>
 		";
 		return false;
 	}
 	//enkripsi password
 		//$password = md5($password);
 		$password = password_hash($password, PASSWORD_DEFAULT);
 		//var_dump($password);
 		
 	//tambahkan user baru ke database
 	mysqli_query($conn, "INSERT INTO admin VALUES('','$name', '$username','$email' ,'$password','$password2')");

 	return mysqli_affected_rows($conn);
 }

function upload(){
 	$nama_file =$_FILES['gambar']['name'];
 	$ukuran_file =$_FILES['gambar']['size'];
 	$error =$_FILES['gambar']['error'];
 	$tmpfile =$_FILES['gambar']['tmp_name'];

 	if($error===4){
 		echo "
 			<script>
 			alert('Tidak ada gambar yang diupload');
 			</script>
 		";
 		return false;
 	}
 	$jenis_gambar =['jpg','jpeg','gif','png'];
 	$pecah_gambar =explode('.', $nama_file);
 	$pecah_gambar =strtolower(end($pecah_gambar));

 	$namafilebaru=uniqid();
 	$namafilebaru .= '.';
 	$namafilebaru .= $pecah_gambar;
 	$nama_file = $namafilebaru;
 	if(!in_array($pecah_gambar,$jenis_gambar)){
 		echo "
 			<script>
 			alert('Yang anda upload bukan file gambar');
 			</script>
 		";
 		return false;
 	}
 	if($ukuran_file>10000000){
 		echo "
 			<script>
 			alert('Ukuran gambar terlalu besar');
 			</script>
 		";
 		return false;	
 	}
 	move_uploaded_file($tmpfile, 'img/'. $nama_file);
 	return $nama_file;
 }
  
 function cari1($keyword){
 	$sql="SELECT *FROM home
 	where 
 	idhome LIKE '%$keyword' OR
 	title_beranda LIKE '%$keyword' OR
 	berandaa LIKE '%$keyword' OR
 	gambar LIKE '%$keyword'
 	";
 	return query ($sql); 
 }
 function cari2($keyword){
 	$sql="SELECT *FROM razermodels
 	where 
 	no LIKE '%$keyword' OR
 	gambar LIKE '%$keyword' OR
 	Nama LIKE '%$keyword'
 	";
 	return query ($sql); 
 }
 function cari4($keyword){
 	$sql="SELECT *FROM form
 	where 
 	idform LIKE '%$keyword' OR
 	nama LIKE '%$keyword' OR
 	email LIKE '%$keyword' OR
 	subject LIKE '%$keyword' OR
 	message LIKE '%$keyword'
 	";
 	return query ($sql); 
 }
 function cari3($keyword){
 	$sql="SELECT *FROM features
 	where 
 	title_features LIKE '%$keyword' OR
 	features LIKE '%$keyword' OR
 	gambar Like '%keyword'
 	";
 	return query ($sql); 
 }
 function edit1($features){
 	global $conn;
 	$id=$features["id"];
 	$title_features=htmlspecialchars($features["title_features"]);
 	$features=htmlspecialchars($features["features"]);
 	$oldimage=htmlspecialchars($features["oldimage"]);

 	//cek apakah user menekan tombol browse
 	if($_FILES['gambar'][error]===4){
 		$gambar=$oldimage;
 	}
 	else{
 		$gambar=upload();
 	}
 	$query="UPDATE features SET 
 			title_features ='$title_features',
 			features ='$features',
 			gambar='$gambar'
 			WHERE idfeatures=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 
 } 
 function edit2($home){
 	global $conn;
 	$id=$home["id"];
 	$title_beranda=htmlspecialchars($home["title_beranda"]);
 	$berandaa=htmlspecialchars($home["berandaa"]);
 	$oldimage=htmlspecialchars($home["oldimage"]);

 	//cek apakah user menekan tombol browse
 	if($_FILES['gambar'][error]===4){
 		$gambar=$oldimage;
 	}
 	else{
 		$gambar=upload();
 	}
 	$query="UPDATE home SET 
 			title_beranda ='$title_beranda',
 			berandaa ='$berandaa',
 			gambar='$gambar'
 			WHERE idhome=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 
 } 
 function edit3($gallery){
 	global $conn;
 	$id=$gallery["no"];
 	//$title_beranda=htmlspecialchars($home["title_beranda"]);
 	$Nama=htmlspecialchars($gallery["Nama"]);
 	$oldimage=htmlspecialchars($gallery["oldimage"]);

 	//cek apakah user menekan tombol browse
 	if($_FILES['gambar'][error]===4){
 		$gambar=$oldimage;
 	}
 	else{
 		$gambar=upload();
 	}
 	$query="UPDATE razermodels SET 
 			gambar='$gambar',
 			Nama = '$Nama'
 			WHERE no=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 
 } 

function upload1(){
 	$nama_file =$_FILES['gambar']['name'];
 	$ukuran_file =$_FILES['gambar']['size'];
 	$error =$_FILES['gambar']['error'];
 	$tmpfile =$_FILES['gambar']['tmp_name'];

 	if($error===4){
 		echo "
 			<script>
 			alert('no one picture an uploaded');
 			</script>
 		";
 		return false;
 	}
 	$jenis_gambar =['jpg','jpeg','gif','png'];
 	$pecah_gambar =explode('.', $nama_file);
 	$pecah_gambar =strtolower(end($pecah_gambar));

 	$namafilebaru=uniqid();
 	$namafilebaru .= '.';
 	$namafilebaru .= $pecah_gambar;
 	$nama_file = $namafilebaru;
 	if(!in_array($pecah_gambar,$jenis_gambar)){
 		echo "
 			<script>
 			alert('this is not picture');
 			</script>
 		";
 		return false;
 	}
 	if($ukuran_file>10000000){
 		echo "
 			<script>
 			alert('Ukuran gambar terlalu besar');
 			</script>
 		";
 		return false;	
 	}
 	move_uploaded_file($tmpfile, 'img/'. $nama_file);
 	return $nama_file;
 }

 /*
 function query1($sql1){
 	global $conn;
 	$exe1=mysqli_query($conn, $sql1);
 	$row1=null;
 	while($data1=mysqli_fetch_array($exe1)){
 		$row1[]=$data1;
 	}
 	return $row1;
 }s

 
 
*/
?>