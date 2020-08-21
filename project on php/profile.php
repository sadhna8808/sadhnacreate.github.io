<?php


// common phjp coding in every page add files ,,,,,,session start,,,,,,,,,,if function ............sql query ,,,,,,,




define('TITLE','profile'); 
include ('dbconnection.php');
session_start();    
if(!isset($_SESSION['is_login'])) 
{

$email=$_SESSION['email'];
$name=$_SESSION['name'];
}
else{
	echo "<script>location.href='userlogin.php'</script>";

}

$sql="SELECT name,email FROM requesterlogin_tb WHERE email='$email'";
$result=$conn->query($sql);
if($result->num_rows==1){
	$row=$result->fetch_assoc();
	$name=$row['name'];

}

if(isset($_REQUEST['nameupdate']))
{
   if($_REQUEST['name']=="")
   {
     $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">fill all details</div>';
   }
   else{

   $name=	$_REQUEST['name'];
   $sql="UPDATE requesterlogin_tb SET name='$name' WHERE email='$email'";
   if($conn->query($sql)==true){
   	$passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> update</div>';
   }
   else{
   		$passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">  not update</div>';
   }
   }
}


?>
<!-- end     commmon in every page......................................................... -->
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

	<title>USER PROFILE</title>
</head>
<body>
	<!-- navbar.......................................................... -->
	<nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="profile.php">SSR construction</a></nav>
	
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row ">
			<!-- sidebar............................................................................... -->
			<nav class="col-sm-2 bg-light sidebar bg-dark py-5">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item"><a href="profile.php" class="nav-link active"><i class="fa fa-user">PROFILE</i></a></li>
						<li class="nav-item"><a href="submit.php" class="nav-link "><i class="fa fa-user">SUBMIT REQUEST</i></a></li>
						<li class="nav-item"><a href="status.php" class="nav-link"><i class="fa fa-align-center">CHECK STATUS</i></a></li>
						<li class="nav-item"><a href="changepass.php" class="nav-link"><i class="fa fa-key">CHANGE PASSWORD</i></a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out">LOGOUT</i></a></li>


					</ul>
					
				</div>
				
			</nav>
			<!-- end sidebar.................................................... -->
			<!-- profile ........................................... -->
			<div class="col-sm-6 mt-5">
				<form action="" method="POST" calss="mx-5">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="<?php
						echo $email
						?>" readonly>

						
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="name" class="form-control" name="name" id="name" value="<?php
						echo $name;
						?>">
						
					</div>
					<button type="submit" class="btn btn-danger" name="nameupdate">UPDATE</button>
					<?php
					if(isset($passmsg))
					{
						echo $passmsg;
					}
					?>
				</form>
				
			</div>
			<!-- end profile........................................................................ -->
		</div>

		
	</div>

<script src="bootstrap1.js"></script>
	<script src="bootstrap2.js"></script>
	<script src="bootstrap3.js"></script>

</body>
</html>