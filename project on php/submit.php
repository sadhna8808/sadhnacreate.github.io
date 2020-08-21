<?php
define('TITLE','submitrequest');
define('PAGE','submitrequest');
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
if(isset($_REQUEST['submitrequest']))
{
	if(($_REQUEST['requestinfo']=="")||($_REQUEST['requestdesc']=="")||($_REQUEST['name']=="")||($_REQUEST['add1']=="")||($_REQUEST['add2']=="")||($_REQUEST['city']=="")||($_REQUEST['state']=="")||($_REQUEST['zip']=="")||($_REQUEST['email']=="")||($_REQUEST['mob']=="")||($_REQUEST['date']==""))
{
		$msg="<div class='alert alert-warning  col-sm-6 ml-5 mt-2'>all required</div>";
	}
	else{
		$info=$_REQUEST['requestinfo'];
		$description=$_REQUEST['requestdesc'];
		$name=$_REQUEST['name'];
		$add1=$_REQUEST['add1'];
		$add2=$_REQUEST['add2'];
		$city=$_REQUEST['city'];
		$state=$_REQUEST['state'];
		$zip=$_REQUEST['zip'];
		$email=$_REQUEST['email'];
	    $mob=$_REQUEST['mob'];
	    $date=$_REQUEST['date'];
	    $sql="INSERT INTO submitrequest_tb(info,description,name,add1,add2,city,state,zip,email,mob,date)VALUES('$info','$description','$name','$add1','$add2','$city','$state','$zip','$email','$mob','$date')";
	    if($conn->query($sql)==true)
	    {
	    	$msg="<div class='alert alert-success  col-sm-6 ml-5 mt-2'>add successful</div>";
	    }
	    else{
	    	$msg="<div classs='alert alert-danger col-sm-6 ml-5 mt-2'>anable </div>";

	    }
        
	}
}


?>
	
	<!-- start srvice form  ................................................................................-->
	<div class="col-sm-4 col-md-8 mt-5">
		<form class="mx-5"action="" method="POST">
			<div class="form-group">
				<label for="inputrequestinfo">inputrequestinfo</label>
				<input type="text"  class="form-control" placeholder="requestinfo" name="requestinfo">
				
			</div>
			<div calss="form-group">
				<label for="inputrequestdescription">Description</label>
				<input type="text"  class="form-control" id="description" placeholder="write desription"name="requestdesc">
				
			</div>
			<div calss="form-group">
				<label for="inputname">name</label>
				<input type="text"  class="form-control" id="inputname" placeholder="name"name="name">
				
			</div>
			
  <div class="form-row">
    <div class=" form-group col-md-6l">
    	<label for="inputaddress">Address 1</label>
      <input type="address" class="form-control" id="inputaddress" placeholder="house no." name="add1">
    </div>
    <div class=" form-group col-md-6">
    	<label for="inputrequestdescription">Address 2</label>
      <input type="address" class="form-control" id="inputaddress" placeholder="colony" name="add2">
    </div>
</div>

   
    <div class="row">
    <div class="col">
    	<label for="inputaddress">City</label>
      <input type="text" class="form-control" id="inputcity" placeholder="name" name="city">
    </div>
    <div class="col">
    	<label for="inputstate">State</label>
      <input type="password" class="form-control" id="inputstate" placeholder="name" name="state">
    </div>
    <div class="col">
    	<label for="inputzipcode">Zip</label>
      <input type="text" class="form-control" placeholder="code"  id="inputzip" name="zip" >
  </div>
</div>
 <div class="form-group row">
    <div class="col-md-7">
    	<label for="inputemail">Email</label>
      <input type="email" class="form-control" placeholder="email"  id="inputemail" name="email">
    </div>
    <div class="col">
    	<label for="inputmobile">Contact</label>
      <input type="mob" class="form-control" placeholder="mob" name="mob">
    </div>
    <div class="col">
    	<label for="inputdate">Date</label>
      <input type="date" class="form-control" id="inputdate" name="date">
    </div>
</div>


<button type="submit" class="btn btn-danger mt-5" name="submitrequest">Submit</button>
<button type="reset" class="btn btn-secondary mt-5 ml-2" name="submitrequest">Reset</button>
  

		</form>
		<?php
		if(isset($msg)){
			echo $msg;
		}
		?>
		
	</div>

	<?php
	include('footer.php');
	?>