<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>




<?php

include ('config.php');

   $name=$_POST['username'];
   $pswd=$_POST['password'];
   

   $dob=$_POST['dob'];
   $sex=$_POST['sex'];
   $bloodgroup=$_POST['bloodgroup'];
   $weight=$_POST['weight'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
  
$sql="INSERT INTO `donor_table`(`username`, `password`, `dob`, `age`, `sex`, `bloodgroup`, `weight`, `address`, `city`, `email`, `phonenumber`) 
VALUES ('$name','$pswd','$dob','0','$sex','$bloodgroup','$weight','$address','$city','$email','$phonenumber')";
$result=mysqli_query($conn,$sql);

$sql1="SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),dob)), '%Y')+0 AS Age from donor_table where username='$name'";
$result=mysqli_query($conn,$sql1);

$data=mysqli_fetch_row($result);

$sql="UPDATE `donor_table` SET `age` = '$data[0]' WHERE `donor_table`.`email` = '$email'";
$result=mysqli_query($conn,$sql);


if($result)
    {
        echo '<script type="text/javascript"> alert("Registered successfully") </script>';
        echo"<div class='alert alert-primary' role='alert'>
    Go to login page <a href='../login.php'>  click here</a>
  </div>";
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }
$conn->close();
  

?>