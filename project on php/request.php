 <?php
 include('dbconnection.php');
 define('TITLE','Request');
 session_start();
if(isset($_SESSION['is_adminlogin']))
{
	$aemail=$_SESSION['aemail'];
}
else{
	echo "<script>location.href='userlogin.php'</script>";
}


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
	<title><?php echo TITLE?></title>
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
						<li class="nav-item"><a href="dashboard1.php" class="nav-link "><i class="fa fa-tachometer" ></i>DASHBOARD</i></a></li>
						
						<li class="nav-item"><a href="request.php" class="nav-link active"><i class="fa fa-comments-o">CUSTOMER REQUEST</i></a></li>
						<li class="nav-item"><a href="tech.php" class="nav-link"><i class="fa fa-street-view">SERVICE MAN</i></a></li>
						<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out">LOGOUT</i></a></li>
					</ul>
				</div>
			</nav>
			<div class="col-sm-4 mt-5 text-center">
                
				<?php
             $sql="SELECT id,description,info,date FROM submitrequest_tb";
             $result=$conn->query($sql);
             if($result->num_rows>0)
             {
             	while($row=$result->fetch_assoc())
             	{
             		echo '<div class="card mt-5 mx-5">';
             		echo '<div class="card-header">';
             		echo 'ID:'.$row['id'];
             		echo '</div>';
             		echo '<div class="card-body">';
             		echo '<h5 class="card-title">request info:'.$row['description'];
             		echo '</h5>';
             		echo '<p class="card-text">'.$row['info'];
             		echo '</p>';
             		echo '<p class="card-text">request date:'.$row['date'];
             		echo '</p>';
             		echo '<div class="float-right ">';
             		echo '<form  method="POST">';
                    echo '<input type="hidden" name="id" value='.$row["id"].'>';
                    echo '<input type="submit" class="btn btn-info mr-3" value="view" name="view">';
                    echo '<input type="submit" class="btn btn-dark " value="close" name="close">';
                    echo '</form>';
             		echo '</div>';
             		echo '</div>';
             		echo '</div>';

             	}
             }
				?>
			</div>
            <?php
            if(isset($_REQUEST['view']))
            {
                $sql="SELECT * FROM submitrequest_tb WHERE id={$_REQUEST['id']}";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            }
            if(isset($_REQUEST['close'])){
                $sql="DELETE FROM submitrequest_tb WHERE id={$_REQUEST['id']}";

            }
            if(isset($_REQUEST['assign']))
            {
                if(($_REQUEST['id']=="")
                    ||($_REQUEST['name']=="")
                ||($_REQUEST['desc']=="")
                ||($_REQUEST['info']=="")
                ||($_REQUEST['name']=="")

            ||($_REQUEST['add1']=="")
            ||($_REQUEST['add2']=="")
            ||($_REQUEST['city']=="")
            ||($_REQUEST['state']=="")
            ||($_REQUEST['zip']=="")
            ||($_REQUEST['email']=="")
            ||($_REQUEST['mob']=="")
            ||($_REQUEST['date']==""))
                {
                    $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-5">all fields</div>';
                }
                else{
                    $id=$_REQUEST['id'];
                         $desc=$_REQUEST['desc'];
                             $info=$_REQUEST['info'];
                  $name=$_REQUEST['name'];
                $add1=$_REQUEST['add1'];
                 $add2=$_REQUEST['add2'];
                 $city=$_REQUEST['city'];
              $state=$_REQUEST['state'];
              $zip=$_REQUEST['zip'];
              $email=$_REQUEST['email'];
                 $tech=$_REQUEST['tech'];
              $mob=$_REQUEST['mob'];
               $date=$_REQUEST['date'];
                $sql="INSERT INTO assign (id,description,info,name,add1,add2,city,state,zip,email,tech,mob,date) VALUES('$id','$desc','$info','$name','$add1','$add2','$city','$state','$zip','$email','$tech','$mob','$date')";
                if($conn->query($sql)==true)
                {
                    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-5">assigned success</div>';
                }
                else{
                      $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-5">assigned not success</div>';

                }

                }

            }

           
            ?>


			<div class="col-sm5 mt-5 jumbotron">
		<form class="mx-5"action="" method="POST">
			<h5 class="text-center">Assign Order</h5>
			<div class="form-group">
				<label for="request id">ID</label>
				<input type="text"  class="form-control" placeholder="id" name="id" value="<?php if(isset($_REQUEST['id'])){
                    echo $_REQUEST['id'];
                }
                    ?>">
			</div>
			<div calss="form-group">
				<label for="information">information</label>
				<input type="text"  class="form-control" id="info" placeholder="info"name="info" value="<?php if(isset($row['info'])){
                    echo $row['info'];}?>">
			</div>
			<div calss="form-group">
				<label for="description">Description</label>
				<input type="text"  class="form-control" id="desc" placeholder="desc"name="desc" value="<?php if(isset($row['desc'])){
                    echo $row['desc'];}?>">
			</div>
			<div calss="form-group">
				<label for="name">name</label>
				<input type="text"  class="form-control" id="inputname" placeholder="name"name="name" value="<?php if(isset($row['name'])){
                    echo $row['name'];}?>">
			</div>
  <div class="form-row">
    <div class=" form-group col-md-6l">
    	<label for="inputaddress">Address 1</label>
      <input type="address" class="form-control" id="inputaddress" placeholder="house no." name="add1" value="<?php if(isset($row['add1'])){
                    echo $row['add1'];}?>">
    </div>
    <div class=" form-group col-md-6">
    	<label for="inputrequestdescription">Address 2</label>
      <input type="address" class="form-control" id="inputaddress" placeholder="colony" name="add2" value="<?php if(isset($row['add2'])){
                    echo $row['add2'];}?>">
    </div>
</div>

   
    <div class="row">
    <div class="col">
    	<label for="inputaddress">City</label>
      <input type="text" class="form-control" id="inputcity" placeholder="name" name="city" value="<?php if(isset($row['city'])){
                    echo $row['city'];}?>">
    </div>
    <div class="col">
    	<label for="inputstate">State</label>
      <input type="password" class="form-control" id="inputstate" placeholder="name" name="state" value="<?php if(isset($row['state'])){
                    echo $row['state'];}?>">
    </div>
    <div class="col">
    	<label for="inputzipcode">Zip</label>
      <input type="text" class="form-control" placeholder="code"  id="inputzip" name="zip" value="<?php if(isset($row['zip'])){
                    echo $row['zip'];}?>" >
  </div>
</div>
 <div class="form-group row">
    <div class="col-md-7">
    	<label for="inputemail">Email</label>
      <input type="email" class="form-control" placeholder="email"  id="inputemail" name="email" value="<?php if(isset($row['email'])){
                    echo $row['email'];}?>">
    </div>
    
</div>
    <div class="form-group row">
    <div class="col-md-7">
        <label for="inputtech">Assisgn Employee</label>
      <input type="tech" class="form-control" placeholder="tech"  id="tech" name="tech" >
  </div>
    
    <div class="col">
    	<label for="inputmobile">Contact</label>
      <input type="mob" class="form-control" placeholder="mob" name="mob" value="<?php if(isset($row['mob'])){
                    echo $row['mob'];}?>">
    </div>
    <div class="col">
    	<label for="inputdate">Date</label>
      <input type="date" class="form-control" id="inputdate" name="date" value="<?php if(isset($row['date'])){
                    echo $row['date'];}?>">
    </div>

    </div>


<button type="submit" class="btn btn-info mt-5" name="assign">Assign</button>
<button type="reset" class="btn btn-secondary mt-5 ml-2" name="submitrequest">Reset</button>

<?php
            echo $_REQUEST['id'];
            ?>
  

		</form>
        <?php
        if(isset($msg))
        {
            echo $msg;

        }
        ?>
				
			</div>

				
			</div>
			</div>
		
	</div>

    <script src="bootstrap1.js"></script>
	<script src="bootstrap2.js"></script>
	<script src="bootstrap3.js"></script>

</body>
</html>