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
                        
                        <li class="nav-item"><a href="request.php" class="nav-link "><i class="fa fa-comments-o">CUSTOMER REQUEST</i></a></li>
                        <li class="nav-item"><a href="tech.php" class="nav-link active"><i class="fa fa-street-view">SERVICE MAN</i></a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out">LOGOUT</i></a></li>
                    </ul>
                </div>
            </nav>
             <div class="col-sm-9 col-md-10 mt-5 text-white">
                <p class=" bg-dark text-white text-center ">List of Technician</p>
                

                 <?php

                $sql="SELECT * FROM technician ";
                $result=$conn->query($sql);
                if($result->num_rows>0)
                {
               
                    echo '<table class="table text-black font-weight-bold mt-5">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th scope="col">id</th>';
                     echo '<th scope="col">name</th>';
                      echo '<th scope="col">email</th>';
                       echo '<th scope="col">mob</th>';
                       echo '</tr>';

                     echo '</thead>';
                     echo '<tbody>';
                     while ($row=$result->fetch_assoc())
                     {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['mob'].'</td>';
                          echo '</tr>';
                     }



                    echo '</table>';
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