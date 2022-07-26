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
        echo '<script type="text/javascript"> alert("Last donation date updated") </script>';
        echo"<div class='alert alert-primary' role='alert'>
    Go to login page <a href='../last_donation.php'>  click here</a>
  </div>";
       
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }
    

$sql1="SELECT * FROM `last_donation_table` WHERE email='$mail'";
$result1=mysqli_query($conn,$sql1);
$data1=mysqli_fetch_row($result1);

$conn->close();
  ?>

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
    <h3>Last donation Details</h3>
    <br>
    <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                
                <tr class="table-info"><th scope="row">last donation date</th><td><?php echo$data1[2]?></td></tr>
                <tr class="table-info"><th scope="row">days until today</th><td><?php echo$data1[1]?></td></tr>
                
</thead>
</table></div>
</body>
</html>