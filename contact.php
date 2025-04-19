<?php
include 'includes/connection.php';
session_start();
?>
	
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BJMP - Detainee Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://design/fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://design/fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="design/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="design/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="design/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="design/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="design/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="design/css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="design/css/owl.carousel.min.css">
	<link rel="stylesheet" href="design/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="design/css/style.css">

	<!-- Modernizr JS -->
	<script src="design/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js1/respond.min.js1"></script>
	<![endif]-->

	</head>
<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="homepage1.php"> HOME </a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="about.php">About</a></li>
						<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-fw fa-folder"></i>
                           <span>Policies</span>
                           </a>
                          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="background-color: green;">
                          <a class="dropdown-item" href="offices.php">Offices</a>
                          <a class="dropdown-item" href="officials.php">Officials</a>
                          <a class="dropdown-item" href="policy.php">Policy</a>
                         <div class="dropdown-divider"></div>
                         </div>
                        </li>
						<li class="active"><a href="contact.php">Contact</a></li>
						<li><a href="userlogouts.php">Logout</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/download-6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-10em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font" style="color: blue">Hi! Welcome to BJMP - Detainee Management System Official Website...</h1>	
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</header>

	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Send your messages here to:</h3>
					 <form role="form" method="post" action="contact_transac.php?action=add">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="hidden" id="name" class="form-control" value="<?php echo $_SESSION["MEMBER_ID1"]; ?>" name="name">
							</div>	
						</div>
						   <?php
                           $query = "SELECT concat(FIRST_NAME, \"-\" ,LAST_NAME) FROM detainee";
                           $result = mysqli_query($db,$query);
                           ?>
                           <div class="form-group">
                           <p>NAME OF DETAINEE:</p>
                           <select class="form-control" name="dname">
                           <?php while($row = mysqli_fetch_array($result)):; ?>
                           <option><?php echo $row[0]; ?></option>
                           <?php endwhile; ?>
                           </select>
                           </div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Phase 1,Brgy. Sta Maria, <br> Binalbagan, Negros Occidental</li>
							<li class="phone"><a href="tel://1234567920">+ 09090062419</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@bjmp.com</a></li>
							<li class="url"><a href="http://FreeHTML5.co">000webhost.com</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images1/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +09090062419</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@bjmp.com</a></li>
							<li><a href="#"><i class="icon-chat"></i> Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> </p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="design/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="design/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="design/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="design/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="design/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="design/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="design/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="design/js/jquery.magnific-popup.min.js"></script>
	<script src="design/js/magnific-popup-options.js"></script>
	
	<script src="design/js/moment.min.js"></script>
	<script src="design/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="design/js/main.js"></script>

	</body>
