<?php
include('dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
	$aemail=$_SESSION['aemail'];
}
else{
	echo "<script>location.href='userlogin.php'</script>";
}
$sql="SELECT max(id) FROM submitrequest_tb";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$submit=$row[0];


$sql="SELECT max(no) FROM assign";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
$assign=$row[0];
$sql="SELECT max(id) FROM technician";
$result=$conn->query($sql);

$tech=$result->num_rows;




?>
 <style>
            
            body{
                background-image: url('sadhna.jpg');
                background-repeat: no-repeat;
                width:100%;
                height:100%;
                
            }

        </style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta nsme="viwport" content="width=device=width/initisl-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="custome.css">
	<title>ADMIN DASHBOARD</title>
</head>
<body>
	<!-- navbar.......................................................... -->
	<nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard1.php">SAMS services</a></nav>
	
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row ">
			<!-- sidebar............................................................................... -->
			<nav class="col-sm-2 bg-light sidebar bg-dark py-5">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item"><a href="dashboard1.php" class="nav-link active"><i class="fa fa-tachometer" ></i>DASHBOARD</i></a></li>
						
						<li class="nav-item"><a href="request.php" class="nav-link"><i class="fa fa-comments-o">CUSTOMER REQUEST</i></a></li>
						<li class="nav-item"><a href="tech.php" class="nav-link"><i class="fa fa-street-view">SERVICE MAN</i></a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out">LOGOUT</i></a></li>
					</ul>
				</div>
			</nav>
			<div class="col-sm-9 col-md-10">
				<div class="row">
					<div class="col-sm-4">
						<div class="card text-white bg-info mb-3 mt-5 mx-5 text-center">
							<div calss="card-header">Received Request</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $submit; ?></h4>
							<a class="btn text-white" href="request.php">View</a>
								</div>
							
						</div>
						
					</div>
					<div class="col-sm-4">
						<div class="card text-white bg-info mb-3 mt-5 mx-5 text-center">
							<div calss="card-header">Assigned Work</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $assign; ?></h4>
							<a class="btn text-white" href="work.php">View</a>
								</div>
							
						</div>
						
					</div>
					<div class="col-sm-4">
						<div class="card text-white bg-info mb-3 mt-5 mx-5 text-center">
							<div calss="card-header">No. of Serviceman</div>
							<div class="card-body">
							<h4 class="card-title"><?php echo $tech; ?></h4>
							<a class="btn text-white" href="tech.php">View</a>
								</div>
							
						</div>
						
					</div>


				</div>
				<!--  -->
					
				</div>
				
			</div>
			</div>

		
	</div>

<script src="bootstrap1.js"></script>
	<script src="bootstrap2.js"></script>
	<script src="bootstrap3.js"></script>

</body>
</html>