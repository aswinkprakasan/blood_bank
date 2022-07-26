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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="user_dashboard.css">
    <h1>Hello <?php echo $data[1];?></h1>
</head>

<body>
    <!-- partial:index.partial.html -->
    <html>

    <head>

    </head>

    <body>
        <div class="area"></div>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            ADMIN
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="admin_user_update1.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Edit/Update User
                        </span>
                    </a>


                <li class="has-subnav">
                    <a href="admin_add_user.php">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Add User
                        </span>
                    </a>

                </li>


                <li>
                    <a href="admin_delete_user.php">
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Delete User
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

</body>

</html>

<doctype html>
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
        <tr>
            <th>NAME</th>
            <th>Email</th>
            <th>User role</th>
            <th>Password</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Blood group</th>
            <th>Weight</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone number</th>
        </tr>

        <?php

        include 'config.php';
        $sql="SELECT * FROM `donor_table` ;";
        $result= mysqli_query($conn,$sql);
        // $total = mysqli_fetch_rows($result);
    
        // if(mysqli_fetch_rows($result)!=0)
        // {
            while($data = mysqli_fetch_assoc($result))
            {
                echo"
                <tr>
                    <td>".$data['username']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['userrole']."</td>
                    <td>".$data['password']."</td>
                    <td>".$data['dob']."</td>
                    <td>".$data['age']."</td>
                    <td>".$data['sex']."</td>
                    <td>".$data['bloodgroup']."</td>
                    <td>".$data['weight']."</td>
                    <td>".$data['address']."</td>
                    <td>".$data['city']."</td>
                    <td>".$data['phonenumber']."</td>
                </tr>";
            }
        // }
        // else 
        // {
        //     echo "No records found";
        // }
            
        ?>    
    </table>
               
</body>
</html>