<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta nsme="viwport" content="width=device=width/initisl-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
		.sadhna{ 
			  background-image: url('sadhna.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                
		}
		#sadhna{
			background-image: url('sadhna.jpg');
                background-repeat: no-repeat;
                width:100%;
                height:100%;

		}
		#services{
			background-color: grey;

		}
	</style>
	<title>CUSTOME SITE</title>

	<!-- bootstarpe css link ..............................-->
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

	<!-- fontawsm css............................................... -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- css file linked -->
	<link rel="stylesheet" type="text/css" href="custome.css">
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-success pl-5 fixed-top">

  		<a href="customer.php" class="navbar-brand">SSR cunstruction</a>
  		<span class="navbar-text">CUSTOMER's HAPPINESS IS OUR AIM</span>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
	 <!-- navigation start.............................................................................--> 
	<!-- <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5  fixed-top">
		<a href="customer.php" class="navbar-brand">SSR cunstruction</a>
		<span class="navbar-text">CUSTOMER's HAPPINESS IS OUR AIM</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
  </button> -->
<div class="collapse navbar-collapse" id="myMenu">

	<ul class="navbar-nav pl-5" class="custome-nav">
		<li class="nav-item" ><a href="#" class="nav-link">HOME</a></li>
		<li class="nav-item" ><a href="#services" class="nav-link home">SERVICES</a></li>
		
		<li class="nav-item" ><a href="#registration" class="nav-link">REGISTRATION</a></li>
		<li class="nav-item" ><a href="userlogin.php " class="nav-link">LOGIN</a></li>
		<li class="nav-item" ><a href="#contact" class="nav-link">CONTACT</a></li>
	</ul>
</div>
	</nav>
	<!-- end of navbar.......................................................................... -->

	<!-- start header jumbo tron..................................................................... -->
	<header class="jumbotron back-img" style="background-image: url(worker.jpg); ">
		<div class=" myclass mainheading text-center mt-3">
			<form action="" class="shadow-lg p-4 text-white">
			<h1 class="text-uppercase  font-weight-bold"> Welcome to new sams</h1>
			<p class="font-italic font-weight-bold">Customer's Happiness is our Aim</p>
			<a href="userlogin.php" class="btn btn-success mr-4">Login</a>
			<a href="#registration" class="btn btn-danger mr-4">Signup</a>
		</form>
		</div>
	</header>
	<!-- end header ...................................................................-->
	<!-- introduction section -->
	</div>
	<!-- end introduction section container..................................................... -->
    <!-- start services section .................................................................-->
    <section class=" jumbotron ourservices bg-light text-center  border-bottom font-weight-bold "id="services">
    		<form action="" class="shadow-lg p-4 text-black">
		<h1>OUR SERVICES</h1>
		<P>We have many services for you</P>
		<div class="row rowsetting">
			<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
			<a href="#" style="font-size: 50px;"><i class="fa fa-home text-success "></i>
		
			
    			<h4 class="mt-4">Home decoration</h4>
    			<img src="paint.jpg" style="width:300px; height:200px;">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
				<a href="#" style="font-size: 50px;"><i class="fa fa-cogs text-primary"></i></a>
    			<h4 class="mt-4">consturctions</h4>
    			<img src="construct.jpg" style="width:300px; height:200px;">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">

<a href="#" style="font-size: 50px;"> <i class="fa fa-cogs text-primary" aria-hidden="true"></i></a>
    			<h4 class="mt-4">provide builders</h4>
    			<img src="worker.jpg" style="width:300px; height:200px;">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">

<a href="#" style="font-size: 50px;"> <i class="fa fa-cogs text-primary" aria-hidden="true"></i></a>
    			<h4 class="mt-4">Architecture</h4>
    			<img src="artitect.jpg" style="width:300px; height:200px;">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">

<a href="#" style="font-size: 50px;"> <i class="fa fa-cogs text-primary" aria-hidden="true"></i></a>
    			<h4 class="mt-4">Civil Engineers</h4>
    			<img src="enginner.jpg" style="width:300px; height:200px;">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">

<a href="#" style="font-size: 50px;"> <i class="fa fa-cogs text-primary" aria-hidden="true"></i></a>
    			<h4 class="mt-4">Plumber & Electrician</h4>
    			<img src="electric.jpg" style="width:300px; height:200px;">
		</div>
	</a>
	</section>
	<!-- service end ..............................................................................-->
	<!-- start registratio form.............................................................
	 -->
	 <?php
	 include('registration.php')
	 ?>
	
	 <!-- end registration form........................................................... -->
	 <!-- start customers ................................................................-->
	 <div class="jumbotron bg-info mt-3" >
	 	<div class="container">
	 		<form action="" class="shadow-lg p-4 text-black">
	 		<h2 class="text-center text-black font-weight-bold">OUR CUSTOMERS</h2>
	 		<div class="row">
	 			<div class="col-lg-3 col-sm-6">
	 				<div calss="card shadow-lg ">
	 					<div class="card-body text-center">
	 						<img src="girl.jpg"  class="img-fluid" style=" height:200px;border-radius:80px;" alt="avt1" >
	 						<h4 class="card-title">SADHNA SINGH</h4>
	 						<p class="card-text">We’re here to help you get over your phone fears. Listen with your eyes closed! This will help you focus your attention on listening only.</p>
	 					</div>

	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-sm-6">
	 				<div calss="card shadow-lg mb-2">
	 					<div class="card-body text-center">
	 						<img src="boy.jpg"  class="img-fluid" style=" height:200px;border-radius:80px;" alt="avt1" >
	 						<h4 class="card-title">RAHULSINGH</h4>
	 						<p class="card-text">We’re here to help you get over your phone fears. Listen with your eyes closed! This will help you focus your attention on listening only.</p>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-sm-6">
	 				<div calss="card shadow-lg mb-2">
	 					<div class="card-body text-center">
	 						<img src="girl.jpg"  class="img-fluid" style=" height:200px;border-radius:80px;" alt="avt1" >
	 						<h4 class="card-title">SADHNA SINGH</h4>
	 						<p class="card-text">We’re here to help you get over your phone fears. Listen with your eyes closed! This will help you focus your attention on listening only.</p>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col-lg-3 col-sm-6">
	 				<div calss="card shadow-lg ">
	 					<div class="card-body text-center">
	 						<img src="boy.jpg"  class="img-fluid" style=" height:200px;border-radius:80px;" alt="avt1" >
	 						<h4 class="card-title">RAHUL SINGH</h4>
	 						<p class="card-text">We’re here to help you get over your phone fears. Listen with your eyes closed! This will help you focus your attention on listening only.</p>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</form>
	 	</div>
	 </div>
	 <!-- end customers,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->
	 <!-- start contacts .....................................................................-->
	 <div class="  bg-cover" id="sadhna">
	 	<form action="" class="shadow-lg p-4 text-black">
	 	<h2 class="text-center mb-4 font-weight-bold">Contact Us</h2>
	 		<div class="row">
	 			<!-- frist colmn........................................ -->
	 			 <?php
	 include('contactform.php')
	 ?>
	 			<!-- end 1 colmn...................................................... -->
	 			
             <!-- second column strt.................................................................. -->
	 			<div class="col-md-4 text-center">
	 				<strong>headequarter:</strong><br>
	 				SAMS pvt ltd.<br>
	 				kapoorthala,Lucknow<br>
	 				UP<br>
	 				Phone:+2345678998<br>
	 				<a href="#" target="_blank">www.sams.com</a><br>
	 				<br>
	 				<strong>Branch:</strong><br>
	 				SAMS pvt ltd.<br>
	 				kapoorthala,Delhi<br>
	 				New delhi<br>
	 				Phone:+2345678998<br>
	 				<a href="#" target="_blank">www.sams.com</a><br>
	 			</div>
	 			<!-- 2 nd colm end .............................................................-->
	 		</div>
	 	</form>
	 </div>
	 <!-- end contact ......................................................................-->
	 <!-- start footer ..............................................................................-->
	 <footer class="container-fluid bg-dark mt-5 text-white" id="contact" >
	 	<div class="row py-3">
	 		<div class="col-md-6">
	 		<span class="pr-2">Follow Us:</span>
	 		<a href="#" target="_blank" class="pr-3 fi-color"><i class="fa fa-facebook"></i></a>
	 	<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-twitter" ></i></a>
	 	<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-youtube-play" ></i></a>
         <a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-google-plus"></i></a>
	 	<a href="#" target="_blank" class="pr-2 fi-color"><i class="fa fa-rss"></i></a>

	 	</div>
	 	<div class="col-md-6 text-right">
	 		<small>Designed by Admin &copy; 2020</small>
	 		<small class="ml-2"><a href="adminlogin.php">Admin login</small>

	 	</div>

	 	</div>
	 </footer>
	 <!-- end foootr.............................................................. -->
   
	<script src="bootstrap1.js"></script>
	<script src="bootstrap2.js"></script>
	<script src="bootstrap3.js"></script>AXM
</body>
</html>