<?php
// for activeness of buttons ....................................
define('TITLE','changepass');
define('PAGE','changepass');
include('header.php');
include('dbconnection.php');
session_start();
if(!isset($_SESSION['is_login']))
{

$email=$_SESSION['email'];

}
else{
	echo "<script>location.href='userlogin.php'</script>";

}
$email=$_SESSION['email'];
if(isset($_REQUEST['updatepass']))
{
	if($_REQUEST['npassword']=="")
	{
      $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">fill fields</div>';
	}
	else{

$pass=$_REQUEST['npassword'];
$sql="UPDATE requesterlogin_tb SET password='$pass' WHERE email='$email'";
if($conn->query($sql)==true)
{
$passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2">password updates</div>';
}
else
{
	$passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">not updated</div>';
}
}
}

?>
<div class="col-sm-9 col-md-10 mt-5">
	<form action="" method="POST">
		<div class="form-group">
			<label for="inputemail">Email</label>
			<input type="email"  class="form-control" id="email" name="email" value="<?php
			echo $email;?>" readonly>
			
		</div>
		<div class="form-group">
			<label for="inputnewpassword">New Password</label>
			<input type="password"  class="form-control" id="newpassword" placeholder="newpassword"name="npassword">

			
		</div>
		<button type="submit" class="btn btn-danger mr-4 mt-4" name="updatepass">Update</button>
		<button type="reset" class="btn btn-secondary mr-4 mt-4" name="updatepass">Reset</button>
		<?php
		if(isset($passmsg)){
			echo $passmsg;
		}?>
	</form>
	
</div>

















<?php
	include('footer.php');
	?>