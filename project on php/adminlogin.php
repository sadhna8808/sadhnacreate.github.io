<?php
include ('dbconnection.php');
session_start();
if(!isset($_SESSION['is_adminlogin']))
{


if(isset($_REQUEST['aemail']))
{


$aemail=$_REQUEST['aemail'];
$apassword=$_REQUEST['apassword'];
$sql="SELECT aemail,apassword FROM admin WHERE aemail='".$aemail."' AND apassword='".$apassword."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1)
{
    $_SESSION['is_adminlogin']=true;
    $_SESSION['aemail']=$aemail;
    echo "<script>location.href='dashboard1.php';</script>";
    exit;
}
else{
    $msg= '<div class="alert alert-warning mt-2 " role="alert" >Enter Valid Email & Password</div>';
}
}
}
else{
   echo "<script>location.href='dashboard1.php';</script>"; 
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
    <title>Admin login</title>

</head>
<body>
    <div class="mt-5 mb-3 text-center font-weight-bold" style="font-size:40px;">
        <i class="fa fa-server"></i>
        <span>Online Services for our customers!</span>
        

    </div>
    <p class="text-center" style="font-size:30px;"> <i class="fa fa-user text-danger" ></i>ADMIN PAGE</p>
    <div class="container-fluid">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4 text-white" method="POST">
                    <div class="form-group">
                        <i class="fa fa-user-circle-o" ></i><label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control"  placeholder="email" name="aemail">
            <small class="form-text">will not share ur details!</small>
                        
                    </div>
                    <div class="form-group">
                        <i class="fa fa-key" ></i><label for="pass" class="font-weight-bold pl-2">Password</label>
                        <input type="password" class="form-control"  placeholder="password" name="apassword">
                        
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