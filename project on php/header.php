
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta nsme="viwport" content="width=device=width/initisl-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="custome.css">
	
	<style>
		body{
			  background-image: url('sadhna.jpg');
                background-repeat: no-repeat;
                width:100%;
                height:100%;
                
		}
	</style>

	<title><?php echo TITLE?></title>
</head>
<body>
	<!-- navbar.......................................................... -->
	<nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="profile.php">SSR construction</a></nav>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row">
			<!-- sidebar............................................................................... -->
			<nav class="col-sm-2 bg-light sidebar bg-dark py-5">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item"><a href="profile.php" class="nav-link <?php if(PAGE=='profile'){
							echo 'active';
							}?>"><i class="fa fa-user">PROFILE</i></a></li>
						<li class="nav-item"><a href="submit.php" class="nav-link  <?php if(PAGE=='submitrequest'){
							echo 'active';
							}?> "><i class="fa fa-user">SUBMIT REQUEST</i></a></li>
						<li class="nav-item"><a href="status.php" class="nav-link  <?php if(PAGE=='status'){
							echo 'active';
							}?>"><i class="fa fa-align-center">CHECK STATUS</i></a></li>
						<li class="nav-item"><a href="changepass.php" class="nav-link  <?php if(PAGE=='changepass'){
							echo 'active';
							}?>"><i class="fa fa-key">CHANGE PASSWORD</i></a></li>
						<li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-sign-out">LOGOUT</i></a></li>


					</ul>
					
				</div>
				
			</nav>
		