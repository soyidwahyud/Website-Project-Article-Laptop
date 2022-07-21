<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Razer Blade Pro</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>
</head>

<body>
		
	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="#service">Features</a></li>
				<li><a href="#Portfolio">Gallery</a></li>
				<li class="small-logo"><a href="#header"><img src="9950bfe63916da358d6be09feae80071_opt.png" alt=""></a></li>
				<li><a href="#client">Interviewees</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->

	<fieldset style="margin-left: 440px ; font:Times New Roman; font-size: 30; margin-top: 40px ;color: black; text-align: justify; width: 400px; height: 400px;">
	<legend  align="center">Data</legend>
			<?php 
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message =$_POST['message'];

			
			
				echo "name  			: ". $name . " <br/>";
				echo "email				: ". $email . "<br/>";
				echo "subject			: ". $subject . "<br/>";
				echo "message			: ". $message . "<br/>";
				
		?>
	</fieldset>
		<legend align="center" ><a href="index.php" align="center">Back to Home page</a></legend>
</body>
</html>