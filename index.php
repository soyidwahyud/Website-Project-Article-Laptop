<?php

	require 'functions.php';

	$home=query("SELECT * FROM home");
	$features = query("SELECT * FROM features");
	$razermodels = query("SELECT * FROM razermodels");
	$interviewees = query("SELECT * FROM interviewees");
	$team = query("SELECT * FROM team");

	if (isset($_POST['submit'])) 
		{					
			if (form($_POST) > 0) 
				{
					echo "
						<script>
							alert('data sucessfully	');
								document.location.href='index.php';
								</script>";
							}
						}	
	
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Lpion</title>
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
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="coba.png" ></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To Lpion Official Website</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>We are a digital agency for environmentally friendly technology.</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="#service">Features</a></li>
				<li><a href="#Portfolio">Gallery</a></li>
				<li class="small-logo"><a href="#header"><img src="coba.png" alt=""></a></li>
				<li><a href="#client">Interviewees</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->

		<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>Features</h2>
			<h6>The following features are available on the Razer Blade Pro.</h6>
			<?php foreach ($home as $row) {?>				
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
						<div class="service-list-col2">
							<h3><?php echo $row["title_beranda"]; ?></h3>
							<p><?php echo $row["berandaa"]; ?></p>
							<br>
							<br>
						</div>
					</div>
				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="<?php echo $row["gambar"] ?>" alt="">
				</figure>
			<?php }?>
		</div>
	</section>
	<!--main-section-end-->
	

	<section class="main-section alabaster">
		<!--main-section alabaster-start-->
		<div class="row">
		<div class="container">
			<?php foreach ($features as $row1) {?>
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="<?php echo $row1["gambar"] ?>" alt="">
				</figure>
					<div class="featured-box">
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3><?php echo $row1["title_features"]; ?></h3>
							<p><?php echo $row1["features"];?></p>
							<br>
						</div>
					</div>
					<a class="Learn-More" href="#">Learn More</a>
			</div>
			<?php }?>
		</div>
	</div>
	</section>
	<!--main-section alabaster-end-->



	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container">
			<h2>Gallery</h2>
			<h6>a collection of photos from Razer Blade Pro</h6>
			<div class="portfolioFilter">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					<li><a href="#" data-filter="*" class="current">All</a></li>
					<li><a href="#" data-filter=".branding">Razer Blade Stealth</a></li>
					<li><a href="#" data-filter=".photography">Razer Blade 15</a></li>
					<li><a href="#" data-filter=".webdesign">Razer Blade Pro 17</a></li>
				</ul>
			</div>
<?php
	
	$rzr = mysqli_query($conn, "SELECT * FROM razermodels");
  ?>
		</div> 
		<div class="portfolioContainer wow fadeInUp delay-04s">
		<?php while ($row = mysqli_fetch_assoc($rzr)): ?>
			<?php if( $row['Nama'] == '13 inch Models') {?>
				<div class=" Portfolio-box branding">
					<a href="<?php echo $row['gambar'] ?>"><img src="<?php echo $row['gambar']; ?>" alt="">
					<h3>Razer Blade Stealth</h3></a>
				</div>
			<?php }?>
					
			<?php if( $row['Nama'] == '15 inch Models') {?>
				<div class=" Portfolio-box photography">
					<a href="<?php echo $row['gambar']; ?>"><img src="<?php echo $row['gambar']; ?>" alt=""></a>
					<h3>Razer Blade 15</h3>
				</div>
			<?php }?>

			<?php if( $row['Nama'] == '17 inch Models') {?>
				<div class=" Portfolio-box webdesign">
					<a href="<?php echo $row['gambar']; ?>"><img src="<?php echo $row['gambar']; ?>" alt=""></a>
					<h3>Razer Blade pro 17</h3>
					<Button>pesan</Button>
				</div>
			<?php }?>

		<?php endwhile;?>
		</div>
	</section>
	<!--main-section-end-->


	<section class="main-section client-part" id="client">
		<!--main-section client-part-start-->
		<?php foreach ($interviewees as $row) { ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05">
						<?php echo $row["isi"];?>
					</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li><a href="#">
            	<img src="<?php echo $row["gambar"];?>" alt="">
            </a></li>
			</ul>
		</div>
		<?php } ?>

	</section>
	<!--main-section client-part-end-->

	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>the team participating in the website creation</h6>
			<div class="team-leader-block clearfix">
				<?php foreach ($team as $row ) {?>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="<?php echo $row['gambar'];?>" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s"><?php echo $row["nama"];?></h3>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>about us</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>USA Headquarters 
						<br>201 3rd Street, Suite 900
						<br>San Francisco, CA 94103
						<br>USA</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa fa-phone"></i>Phone:</h3>
						<span>+1 (760) 579 0180 </span>
					</div>
				
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6306.136369064329!2d-122.40918058341809!3d37.78844180874084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807d9eff3e41%3A0x62066281bb6383a5!2sRazer+USA!5e0!3m2!1sen!2sid!4v1538353666856" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<form action="" method="POST" role="form" class="form">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn" name="submit"><a href="index.php"></a> Send Message</button></div>
							
						</form>
						<br>
						<br>
						<div class="text-center"><button type="submit" class="input-btn" name="submit"><a href="logout.php"></a> Logout</button></div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="coba.png" alt=""></a></div>
			<span class="copyright">Copyright &copy; 2019 Lpion Inc. All rights reserved</span>
			<div class="credits">
				<!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
			</div>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

	<script type>
		function validateForm()
		{
			var nama = document.forms["form"]["name"].value;
			var email = document.forms["form"]["email"].value;
			var subject= document.forms["form"]["subject"].value;
			var message = document.forms["form"]["message"].value;

			 
	</script>


</body>

</html>