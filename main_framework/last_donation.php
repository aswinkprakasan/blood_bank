<?php
session_start();
if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Last donation</title>
  <link rel="stylesheet" href="user_dashboard.css">
    <h1>Last donation date</h1>
</head>
<body>
<!-- partial:index.partial.html -->
  <form method="post" action="backend/_last_donation.php">
    <p align="center"style="text-indent: 30px">
    <input type="date" name="last_donation" >
    <button type="submit"name="submit">submit</button>
    </form>
  <body><div class="area"></div><nav class="main-menu">
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

<!-- partial -->
  
</body>
</html>