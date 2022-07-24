<?php
session_start();
if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}
include 'config.php';
$mail=$_SESSION['mail'];
$sql="SELECT * FROM `donor_table` WHERE email='$mail'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($result);
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User dashboard</title>
  <link rel="stylesheet" href="user_dashboard.css">
   
</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
 
  </head>
  <div class="container"> <h1>Hello 
        <?php 
    echo $data[1];?></h1></div>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="user_update.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Edit/Update Details
                        </span>
                    </a>
                    
                
                <li class="has-subnav">
                    <a href="last_donation.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Last donation date
                        </span>
                    </a>
                   
                </li>
               
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Help desk
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="../login_system/backend/_logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
</html>
<!-- partial -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="container">
    <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="table-info"><th scope="row">Name</th><td><?php echo$data[1]?></td></tr>
                <tr class="table-info"><th scope="row">Email</th><td><?php echo$data[0]?></td></tr>
                <tr class="table-info"><th scope="row">DOB</th><td><?php echo$data[4]?></td></tr>
                <tr class="table-info"><th scope="row">Age</th><td><?php echo$data[5]?></td></tr>
                <tr class="table-info"><th scope="row">Sex</th><td><?php echo$data[6]?></td></tr>
                <tr class="table-info"><th scope="row">Blood Group</th><td><?php echo$data[7]?></td></tr>
                <tr class="table-info"><th scope="row">Weight</th><td><?php echo$data[8]?></td></tr>
                <tr class="table-info"><th scope="row">Address</th><td><?php echo$data[9]?></td></tr>
                <tr class="table-info"><th scope="row">City</th><td><?php echo$data[10]?></td></tr>
                <tr class="table-info"><th scope="row">Phone number</th><td><?php echo$data[11]?></td></tr>
</body>
</html>
