<?php
session_start();
$mail=$_SESSION['mail'];
if(!isset($_SESSION["mail"]))
{
    header("Location:../login_system/login.php");
}
include 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    $email=$_POST["email"];
    $name=$_POST['name'];
    $sql="DELETE FROM `donor_table` WHERE `email`='$email'";
    // $result=mysqli_query($conn,$sql);   
    $result=mysqli_query($conn,$sql); 
    if($result)
    {
        echo '<script type="text/javascript"> alert("Deleted successfully") </script>';
        
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated") </script>';
    }
   }
  

?>


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

  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="admin_dashboard.php">Home</a>

</nav>
    <div class="container">
    <h1>Delete User</h1>
    <h5>Go down</h5>
</div>

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
    
<form action="admin_delete_user.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter the email address of the donor to be deleted:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter The corresponding name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aaria-describedby="emailHelp">
  </div>

  <button type="submit"  name='submit' class="btn btn-primary">Submit</button>
</form>
</body>
</html>