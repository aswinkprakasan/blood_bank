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
$data=mysqli_fetch_array($result);

$sql1="SELECT * FROM last_donation_table WHERE email='$mail'";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_array($result1);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>USER DASHBOARD</title>
    <link rel="stylesheet" href="user_dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>


</head>

<body>

    <div class="container">
        <h1 style="margin-top:30px">Hello <?php echo $data[1];?></h1>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered" style="margin-top:30px">
            <thead class="thead-dark">
                <tr>
                    <th class="table-info" scope="row">Name</th>
                    <td class="table-light"><?php echo$data[1]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Email</th>
                    <td class="table-light"><?php echo$data[0]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">DOB</th>
                    <td class="table-light"><?php echo$data[4]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Age</th>
                    <td class="table-light"><?php echo$data[5]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Sex</th>
                    <td class="table-light"><?php echo$data[6]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Blood Group</th>
                    <td class="table-light"><?php echo$data[7]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Weight</th>
                    <td class="table-light"><?php echo$data[8]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Address</th>
                    <td class="table-light"><?php echo$data[9]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">City</th>
                    <td class="table-light"><?php echo$data[10]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Phone number</th>
                    <td class="table-light"><?php echo$data[11]?></td>
                </tr>
                <tr>
                    <th class="table-info" scope="row">Donation interval</th>
                    <td class="table-light"><?php 
                if(mysqli_num_rows($result1) > 0)
                {echo$data1[1];}
                else
                {echo "Last donation date not updated";}?></td>
                </tr>
    </div>
    <div>
        <?php

if(mysqli_num_rows($result1) > 0)
{
    if($data1['days']>90)
    {
        echo'<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Ohh Yeah!!</strong> You are eligible to donate based on your donation date.
      </div>';
    }
    else{
        echo'<div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Ohh No!!</strong> You are not eligible to donate based on your donation date.
      </div>';
    }
}
else{
    echo'<div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oops!!</strong> Last donation date not updated.
      </div>';
}
?>
    </div>
    <div>
        <?php

    if($data['age']<18)
    {
        echo'<div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oops!!</strong> Wait until you are 18...
      </div>';
    }
    

?>


    </div>

    <div>
        <?php

    if($data['weight']<45)
    {
        echo'<div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oops!!</strong> Go increase your weight...
      </div>';
    }
    

?>


    </div>

    <body>
        <div class="area"></div>
        <nav class="main-menu">
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
                        <i class="fa fa-pencil fa-2x"></i>
                        <span class="nav-text">
                            Edit/Update Details
                        </span>
                    </a>


                <li class="has-subnav">
                    <a href="last_donation.php">
                        <i class="fa fa-tint  fa-2x"></i>
                        <span class="nav-text">
                            Last donation date
                        </span>
                    </a>

                </li>

                <li>
                    <a href="../login_system/resetpass.php">
                        <i class="fa fa-key fa-2x"></i>
                        <span class="nav-text">
                            Change password
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