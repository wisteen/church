<?php
include "config/db.php";

$id = "";
$image = "";
$description = "";
$title = "";

if($_SERVER['REQUEST_METHOD'] == "GET"){
	// echo $_GET['id'];
	$id = $_GET['id'];

	if(!isset($_GET['id'])){
		header("location:index.php");
		exit;
	} else{
		try {
			//code...
			$sql = "SELECT * FROM upcoming_event WHERE id = $id";
			$query = mysqli_query($conn, $sql);
		
			$total =  mysqli_num_rows($query);

			
		
			if ($total > 0){
				while($row = mysqli_fetch_assoc($query)) {
					$image = $row["event_image"];
					$description = $row['event_description'];
					$title = $row["event_title"];
					$date = $row['event_date'];
					
				}
			}
		} catch (\Throwable $th) {
			//throw $th;
			header("location:error.php?error=Page not found&type=404");
		}
		
	}
}




?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CITADEL OF MERCY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Citadel of mercy - The Supernatural Chuch" />
	<meta name="keywords" content="Citadel of mercy, Pastor Pascal Goodnews, Prayer and deliverance, Councilling." />
	<meta name="author" content="Wisteen Technology" />

	<!-- 
	//////////////////////////////////////////////////////

	WISTEEN TECHNOLOGY
	DESIGNED & DEVELOPED by Wisteen Technology
		
	Website: 		http://www.citadelofmercy.com/
	Email: 			info@citadelofmercy.org
	Twitter: 		http://
	Facebook: 		https://

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />



	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"
	>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Shortcut -->
	 <link rel="shortcut icon" href="images/logo church.png" type="image/x-icon">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php require "parts/header.php"; ?>
	
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/new/event.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<h1>Upcoming Events</h1>
										<h2>Do not miss out on any of out events / activities</h2>
										<!-- <h2><img src="images/logo with te with bg lite.png" 
											style="width: 300px; height:350px; right:5px"
										alt=""></h2> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<aside id="fh5co-main">
		<div class="row animate-box">
				<div style="margin-bottom:0;pading-bottom:0" class="col-md-6  col-md-offset-3 fh5co-heading">
					<h1  class="text-center col-md-offset-3"><?= $title; ?></h1>
				</div>
				
			</div>

				<div class="row animate-box">
					<div class="col-md-6">
						<h3 class="col-xs-offset-1"><?= $description; ?></h3>
					</div>
					<div class="col-md-6">
						<h3 class="col-xs-offset-1"><img src="img/<?= $image; ?>" class='img-responsive ' alt=""></h3>
						<i class=""><?= $date; ?></i>
					</div>
			</div>
		</aside>

		<div id="fh5co-events">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Upcoming Events</h2>
					<p>Stay tune and updated on the upcoming events, don't miss out on any.</p>
				</div>
			</div>
			<div class="row">
				<!-- //// This is for aouncements upcomming events -->
				<?php 
				require "config/db.php";
				require "views/views.php";
				viewEvents("upcoming_event", $conn, 2, true);
			?>
				
			</div>
		</div>
		<div id="fh5co-counter" class="fh5co-counters fh5co-light-grey">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>We have a fun facts.</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Members</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Ministries</span>
						</div>
						<div class="clearfix visible-sm-block visible-xs-block"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Activities</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
	<?php require "parts/footer.php";?>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

