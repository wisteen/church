<?php
$id = "";
$image = "";
$description = "";
$title = "";

if($_SERVER['REQUEST_METHOD'] == "GET"){
	// echo $_GET['id'];
	$id = $_GET['error'];
    $type = $_GET['type'];
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
  <style>
    .error-page h1{
        font-size:20em;
    }

    .error-page h4{
        font-size:5em
    }
    @media (max-width: 500px) {
        .error-page h1{
            font-size: 5em;
        }  

        .error-page h4{
        font-size:2em
    }
    }
    
  </style>
	</head>
<body>
<div class="container-wrap">
    <?php echo "
    <aside id='fh5co-main'>
    <div class='row '>
         

            <div class='col-md-6'>
						
    <img src='images/logo church.png' class='img-responsive ' alt=''>
            </div>

            <div class='col-md-6 error-page'>
            <h1 style='' class='text-center'> $type </h1>
            <h4 style='' class='text-center'> $id ! </h4>
            <p class='text-center'>Back to home page <a href='index.php'> Click Here!</a></p>
        </div>
    </div>

   
    </aside>
    ";
}?>


</div>
</body>

</html>