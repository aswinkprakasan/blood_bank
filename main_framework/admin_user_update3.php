<?php
include "config.php";
session_start();
$mail=$_SESSION['newemail'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    $value=$_POST["value"];
    $type=$_POST['type'];
    $sql="UPDATE `donor_table` SET `$type`='$value' WHERE email='$mail'";
    $result=mysqli_query($conn,$sql); 
    
   }
$email=$_SESSION['newemail'] ;

if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}
include 'config.php';
$sql="SELECT * FROM `donor_table` WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($result);

if($result)
    {
        echo '<script type="text/javascript"> alert("User data updated successfully") </script>';
        
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }

?>
</html>
<!-- partial -->
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

  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Home</a>
  

</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="container">
    <h3>Donor Details</h3>
    <br>
    <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="table-info"><th scope="row">Name</th><td><?php echo$data[1]?></td></tr>
                <tr class="table-info"><th scope="row">Email</th><td><?php echo$data[0]?></td></tr>
                <tr class="table-info"><th scope="row">DOB</th><td><?php echo$data[4]?></td></tr>
                <tr class="table-info"><th scope="row">Age</th><td><?php echo$data[5]?></td></tr>
                <tr class="table-info"><th scope="row">Sex</th><td><?php echo$data[6]?></td></tr>
                <tr class="table-info"><th scope="row">BloodGroup</th><td><?php echo$data[7]?></td></tr>
                <tr class="table-info"><th scope="row">Weight</th><td><?php echo$data[8]?></td></tr>
                <tr class="table-info"><th scope="row">Address</th><td><?php echo$data[9]?></td></tr>
                <tr class="table-info"><th scope="row">City</th><td><?php echo$data[10]?></td></tr>
                <tr class="table-info"><th scope="row">Phone number</th><td><?php echo$data[11]?></td></tr>
</thead>
</table></div>
<div class="container">
<h3>Editing form</h3>
<form action="admin_user_update3.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Type Of The Detail:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="type" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter The New Value:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="value" aaria-describedby="emailHelp">
  </div>

  <button type="submit"  name='submit' class="btn btn-primary">Submit</button>
</form>
</body>
</html>