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
  <title>ADMIN DETAILS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_dashboard.php">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"style="width:30px;"alt="BACK">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
        </svg>
    </a>

    <h3 class="container-fluid  text-white" style="text-align: center">ADMIN DETAILS</h3>
    
  </div>
</nav>
<div class="container">
    <table class="table table-bordered table-responsive center" style="margin-top:100px;margin-left:0px;">
            
                <tr class="table-info"><th class="table-danger"scope="row">Name</th><td><?php echo$data[1]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Email</th><td><?php echo$data[0]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">DOB</th><td><?php echo$data[4]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Age</th><td><?php echo$data[5]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Sex</th><td><?php echo$data[6]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Blood Group</th><td><?php echo$data[7]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Weight</th><td><?php echo$data[8]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Address</th><td><?php echo$data[9]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">City</th><td><?php echo$data[10]?></td></tr>
                <tr class="table-info"><th class="table-danger"scope="row">Phone number</th><td><?php echo$data[11]?></td></tr>
</div>


</body>
</html>