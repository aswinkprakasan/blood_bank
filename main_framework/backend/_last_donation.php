

<?php
session_start();
include ('config.php');
$mail=$_SESSION['mail'];
$last_don=$_POST['last_donation'];
$email=$_SESSION["mail"];
   
$sql="INSERT INTO last_donation_table (email,days,last_don_date) VALUES ('$email', '0','$last_don')";
$result=mysqli_query($conn,$sql);

$sql1="SELECT DATEDIFF(now(),`last_don_date`) AS dated FROM last_donation_table WHERE email='$email'";
$result=mysqli_query($conn,$sql1);
$data=mysqli_fetch_row($result);


$sql="UPDATE `last_donation_table` SET `days` = '$data[0]' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);

    
$sql = "UPDATE `last_donation_table` SET `last_don_date` = '$last_don' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql); 

$sql1="SELECT DATEDIFF(now(),`last_don_date`) AS dated FROM last_donation_table WHERE email='$email'";
$result=mysqli_query($conn,$sql1);
$data=mysqli_fetch_row($result);


$sql="UPDATE `last_donation_table` SET `days` = '$data[0]' WHERE `last_donation_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);

if($result)
    {
      echo '<script type="text/JavaScript">
      if(!alert("Last donation date updated")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/blood_bank/main_framework/last_donation.php";
      </script>';
       
    }
    else
    {
      echo '<script type="text/JavaScript">
      if(!alert("Updation failed")) document.location = "http://'.$_SERVER['HTTPHTTP_HOST'].'/blood_bank/main_framework/last_donation.php";
      </script>';
    }
    



$conn->close();
  ?>
  <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LAST DONATION</title>
  <link rel="stylesheet" href="user_dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
</head>
</html>

