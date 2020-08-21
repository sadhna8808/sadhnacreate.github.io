<?php
include ('dbconnection.php');
//checknd field.............................................................
if(isset($_REQUEST['signup']))
{
	if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['password']==""))
	{
		$sad= '<div class="alert alert-warning mt-2 " role="alert" >All are required</div>';

	}
	//field regidtrd...................................................................
	else
	{
		$sql="SELECT email FROM requesterlogin_tb WHERE email='".$_REQUEST['email']."'";
		$result=$conn->query($sql);
		if($result->num_rows==1)
		{
			$sad= '<div class="alert alert-warning mt-2 " role="alert" >email already exist</div>';
		}
		else{
			//user values.............................................................................

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$password=$_REQUEST['password'];
$sql="INSERT INTO requesterlogin_tb(name,email,password) VALUES('$name','$email','$password')";
if($conn->query($sql)==TRUE)
{
	$sad='<div class="alert alert-success mt-2 " role="alert" >Resgistration successfully!</div>';

}
else{
	$sad='<div class="alert alert-danger mt-2 " role="alert" >Unable to signup!</div>';

}

}
}
}
?>
<style>
	#registration{
		background-image: url('sadhna.jpg');
		background-repeat: no-repeat;
		background: cover;
	}
</style>
 <div class=" mt-2 pt-5" id="registration">
	 	<h2 class="text-center">Create Account</h2>
	 	<div class="row  mb-8">
	 		<div class="col-md-6 offset-md-3">
	 			<form action="" method="POST" class="shadow-lg p-4">
	 				<div class="form-group">
	 					<i class="fa fa-user"></i><label for="" class="font-weight-bold pl-2">Name</label>
	 					<input type="text" class="form-control" placeholder="name" name="name">
	 					
	 				</div>
	 				<div class="form-group">
	 					<i class="fa fa-user"></i><label for="" class="font-weight-bold pl-2">Email</label>
	 					<input type="email" class="form-control" placeholder="email" name="email">
	 					<small class="form-text">We will not share your email with anyone.</small>
	 					
	 				</div>
	 				<div class="form-group">
	 					<i class="fa fa-key" ></i><label for="" class="font-weight-bold pl-2">Password</label>
	 					<input type="password" class="form-control" placeholder="password" name="password">
	 					
	 				</div>
	 				<button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="signup">Sign Up
	 					
	 				</button>
	 				<em style="font-size:10px;">Agree to terms and service policy.</em>
	 				<?php
	 				if(isset($sad))
	 				{
	 				echo $sad;
	 			}
	 				?>
	 			</form>
	 			
	 		</div>
	 		
	 	</div>
	 	
	 </div>