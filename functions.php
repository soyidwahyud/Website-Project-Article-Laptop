<?php
//membuat koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "lpion");

 $sql = "select * from home";
 $exe = mysqli_query($conn, $sql);
 $gambar = "SELECT * FROM razermodels";
 $exe2 = mysqli_query($conn,$gambar);
 $inter = "SELECT * FROM interviewees";
 $exe3 = mysqli_query($conn,$inter);
 $team = "SELECT * FROM team";
 $exe4 = mysqli_query($conn,$team);
 //$sql1 = "select * from features";
 //$exe1 = mysqli_query($conn,$sql1);
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
 function tambah ($data){
 	global $conn;

 	$nama=htmlspecialchars($data["nama"]);
 	$nim=htmlspecialchars($data["nim"]);
 	$email=htmlspecialchars($data["email"]);
 	$jurusan=htmlspecialchars($data["jurusan"]);
 	//$gambar=htmlspecialchars($data["gambar"]);

 	$gambar=upload();
 	if(!$gambar){
 		return false;
 	}
 	$query= "INSERT INTO mahasiswa
 				VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 function hapus($id){
 	global $conn;
 	$query="delete from mahasiswa where id=$id";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }*/
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

 function query($sql){
 	global $conn;
 	$exe=mysqli_query($conn, $sql);
 	$row=null;
 	while($data=mysqli_fetch_array($exe)){
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
 	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

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
 /*
 function query1($sql1){
 	global $conn;
 	$exe1=mysqli_query($conn, $sql1);
 	$row1=null;
 	while($data1=mysqli_fetch_array($exe1)){
 		$row1[]=$data1;
 	}
 	return $row1;
 }
 /*
 function edit($mhs){
 	global $conn;
 	$id=$mhs["id"];
 	$nama=htmlspecialchars($mhs["nama"]);
 	$nim=htmlspecialchars($mhs["nim"]);
 	$email=htmlspecialchars($mhs["email"]);
 	$jurusan=htmlspecialchars($mhs["jurusan"]);
 	$gambarlama=htmlspecialchars($mhs["gambarlama"]);

 	//cek apakah user menekan tombol browse
 	if($_FILES['gambar'][error]===4){
 		$gambar=$gambarlama;
 	}
 	else{
 		$gambar=upload();
 	}
 	$query="UPDATE mahasiswa SET 
 			Nama ='$nama',
 			Nim ='$nim',
 			Email='$email', 
 			Jurusan='$jurusan', 
 			Gambar='$gambar'
 			WHERE id=$id";
 	mysqli_query($conn,$query);

 	return mysqli_affected_rows($conn);
 }
 function cari($keyword){
 	$sql="SELECT *FROM mahasiswa
 	where 
 	Nama LIKE '%$keyword' OR
 	Nim LIKE '%$keyword' OR
 	Email LIKE '%$keyword' OR 
 	Jurusan LIKE '%$keyword'
 	";

 	return query ($sql); 
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
 	move_uploaded_file($tmpfile, 'image/'. $nama_file);
 	return $nama_file;
 }
 function registrasi($data)
 {
 	global $conn;

 	$username = strtolower(stripcslashes($data['username']));

 	$password = mysqli_real_escape_string($conn, $data['password']);
 	$password2 = mysqli_real_escape_string($conn, $data['password2']);

 	//cek username
 	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

 	//cek kondisi line 175 bernilai true
 	
 	if(mysqli_fetch_assoc($result)) 
 	{
 		echo 
 		"
 			<script>
 				alert('username sudah ada ');
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
 				alert('password tidak sama');
 			</script>
 		";
 		return false;
 	}
 	//enkripsi password
 		//$password = md5($password);
 		$password = password_hash($password, PASSWORD_DEFAULT);
 		//var_dump($password);
 		
 	//tambahkan user baru ke database
 	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

 	return mysqli_affected_rows($conn);
 }*/
?>
