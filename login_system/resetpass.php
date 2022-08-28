<?php
session_start();
$mail=$_SESSION['mail'];
if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RESET PASSWORD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="resetpass.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../main_framework/user_dashboard.php">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"style="width:30px;"alt="BACK">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
        </svg>
    </a>

    <h3 class="container-fluid  text-white" style="text-align: center">RESET PASSWORD</h3>
    
  </div>
</nav>
<div class= "container">
    <div class= "jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;">
<form action="backend/_resetpass.php" method="post" id="form">
                
                <div class="form-group">
                    <input type="password" name="oldpass"  class="form-control" placeholder="Old Password" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="newpass"  class="form-control" placeholder="New Password" required>
                </div><br>
                <div class="form-group">
                    <input type="password" name="cnewpass"  class="form-control" placeholder="Confirm New Password" required>
                </div><br>
                
            <div class="form-group">
                <button type="submit" name="change" class="btn btn-primary ">CHANGE</button>
                <a href="../main_framework/user_dashboard.php" class="btn btn-danger">CANCEL</a>
            </div>

</form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="resetpass.js"></script>

</body>
</html>