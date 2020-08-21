<?php
include ('dbconnection.php');
session_start();
if(!isset($_SESSION['is_login']))
{


if(isset($_REQUEST['email']))
{


$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="SELECT email,password FROM requesterlogin_tb WHERE email='".$email."' AND password='".$password."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1)
{
    $_SESSION['login']=true;
    $_SESSION['email']=$email;
    echo "<script>location.href='profile.php';</script>";
    exit;
}
else{
    $msg= '<div class="alert alert-warning mt-2 " role="alert" >Enter Valid Email & Password</div>';
}
}
}
else{
   echo "<script>location.href='profile.php';</script>"; 
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta nsme="viwport" content="width=device=width/initisl-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap css........................................ -->
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            
            body{
                background-image: url('sadhna.jpg');
                background-repeat: no-repeat;
                width:100%;
                height:100%;
                
            }

        </style>
	<title>login</title>

</head>
<body>
	<div class="mt-5 mb-3 text-center font-weight-bold" style="font-size:40px;">
		<i class="fa fa-server"></i>
		<span>Online Services for our customers!</span>
		

	</div>
    <p class="text-center" style="font-size:30px;"> <i class="fa fa-user text-danger" ></i>USER AREA</p>
    <div class="container-fluid">
    	<div class="row justify-content-center custom-margin">
    		<div class="col-sm-6 col-md-4">
    			<form action="" class="shadow-lg p-4 text-white" method="POST">
    				<div class="form-group">
    					<i class="fa fa-user-circle-o" ></i><label for="email" class="font-weight-bold pl-2">Email</label>
    					<input type="email" class="form-control"  placeholder="email" name="email">
    		<small class="form-text">will not share ur details!</small>
    					
    				</div>
    				<div class="form-group">
    					<i class="fa fa-key" ></i><label for="pass" class="font-weight-bold pl-2">Password</label>
    					<input type="password" class="form-control"  placeholder="password" name="password">
    					
    				</div>
    				<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block mt-4 shadow-sm">Login</button>
                    <?php
                    if(isset($msg))
                    {
                    echo $msg;
                }
                    ?>
    				
    			</form>
                <div class="text-center "><a href="index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Home Page</a>
                    
                </div>
    			
    		</div>
    		
    	</div>
    	
    </div>
	<!-- javascript files................................................................... -->
	<script src="bootstrap1.js"></script>
	<script src="bootstrap2.js"></script>
	<script src="bootstrap3.js"></script>


</body>
</html>