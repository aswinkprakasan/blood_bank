<?php
session_start();
$mail=$_SESSION['mail'];
if(!isset($_SESSION["mail"]))
{
    header("Location:../login.php");
}
include ('config.php');
if(isset($_POST['submit']))
{
    $npass=$_POST['npass'];
    $cnpass=$_POST['cnpass'];

    if($npass===$cnpass)
        {
            $sql1="UPDATE `donor_table` SET `password` = '$npass' WHERE `donor_table`.`email` = '$mail'";
            $result1=mysqli_query($conn,$sql1);

            if($result1)
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password changed successfully")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/login.php";
              </script>';
              session_destroy();
                
            }
            else
            {
              echo '<script type="text/JavaScript">
              if(!alert("Password not changed")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/forgot.php";
              </script>';
            }
        }
        else
        {
            echo '<script type="text/JavaScript">
              if(!alert("New Password not matching")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/login_system/forgot.php";
              </script>';
        }
}

?>

     
<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORGOT PASSWORD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="_forgot.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../forgot.php">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" style="width:30px;" alt="BACK">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                </svg>
            </a>

            <h3 class="container-fluid  text-white" style="text-align: center">FORGOT PASSWORD</h3>

        </div>
    </nav>
    <div class="container">
        <div class="jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;">
            <form action="_forgot.php" method="post" id="form">

                <div class="form-group">
                    <input type="password" name="npass" class="form-control" placeholder="New password" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="cnpass" class="form-control" placeholder="Confirm new password"
                        required>
                </div><br>


                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary ">SUBMIT</button>

                </div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="_forgot.js"></script>
</body>

</html>


