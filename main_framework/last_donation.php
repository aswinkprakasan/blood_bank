<?php
session_start();
if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}
include ('config.php');
$mail=$_SESSION['mail'];
$sql1="SELECT * FROM `last_donation_table` WHERE email='$mail'";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_row($result1);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LAST DONATION</title>
  <link rel="stylesheet" href="user_dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <h1 style="margin-top:50px;">Last donation date</h1>
</head>
<body>
<div class= "container">
<div class= "jumbotron" style="margin-top:50px;margin-left:20%;margin-right:20%;margin-bottom:20px;">
  <form method="post" action="backend/_last_donation.php">
    <div class= "form-group">
    <p align="center"style="text-indent: 30px">
    <div class="form-group">
    <input type="date" name="last_donation"class="form-control" required >
    </div><br>
    <button type="submit"name="submit" class="btn btn-danger">submit</button>
</div>
    </form>
</div>
</div>

<div class="container">
    <h3>Last donation Details</h3>
    <br>
    <table class="table table-striped table-bordered" style="margin-top:50px;margin-left:10px;margin-right:50px;margin-bottom:20px;">
            <thead class="thead-dark">
                
                <tr class="table-info"><th scope="row">last donation date</th><td><?php echo$data1[2]?></td></tr>
                <tr class="table-info"><th scope="row">days until today</th><td><?php echo$data1[1]?></td></tr>
                
</thead>
</table></div>
  <nav class="main-menu">
            <ul>
                <li>
                    <a href="user_dashboard.php">
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
                            Contact Us
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

<!-- partial -->
  
</body>
</html>