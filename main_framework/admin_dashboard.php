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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_details.php">
        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20"style="width:30px;" fill="currentColor">
        <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" />
        </svg>
    </a>

    <h3 class="container-fluid  text-white" style="text-align: center">Hello <?php echo $data[1];?> You are now an ADMIN..</h3>
    <div class="d-flex">
    <a class="navbar-brand" href="../login_system/backend/_logout.php">
        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" style="width:30px;" stroke="currentColor" strokeWidth={2}>
            <path strokeLinecap="round" strokeLinejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
    </a>
    </div>
  </div>
</nav>

<div class="container">
    <a href="admin_add_user.php" class="btn btn-primary"style="margin-top:100px;margin-left:90%;">ADD USER</a>
</div>
<div class="container">
    <table class="table table-bordered table-responsive center" style="margin-top:20px;margin-left:-90px;">
        <thead class="table-danger">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Blood group</th>
            <th>Weight</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone number</th>
            <th>Edit/Update</th>
            <th>Delete</th>
        </tr>
        </thead>

        <?php

        include 'config.php';
        $sql="SELECT * FROM `donor_table` ;";
        $result= mysqli_query($conn,$sql);
        if($result)
        {
            while($data = mysqli_fetch_array($result))
            {
                ?>
                    <tbody>
                        <tr>
                            <th> <?php echo $data['username'] ?> </th>
                            <th> <?php echo $data['email'] ?> </th>
                            <th> <?php echo $data['dob'] ?> </th>
                            <th> <?php echo $data['age'] ?> </th>
                            <th> <?php echo $data['sex'] ?> </th>
                            <th> <?php echo $data['bloodgroup'] ?> </th>
                            <th> <?php echo $data['weight'] ?> </th>
                            <th> <?php echo $data['address'] ?> </th>
                            <th> <?php echo $data['city'] ?> </th>
                            <th> <?php echo $data['phonenumber'] ?> </th>
                        <form action="admin_user_update.php" method="post">
                            <input type="hidden" name="update" value="<?php echo $data['email'] ?>">
                            <th> <button type="submit" name="submit" class="btn btn-success ">EDIT</button> </th>
                        </form>
                        <form action="admin_delete_user.php" method="post">
                            <input type="hidden" name="delete" value="<?php echo $data['email'] ?>">
                            <th> <button type="submit" name="submit" class="btn btn-danger ">DELETE</button> </th>
                        </form>
                        </tr>
                    </tbody>

                <?php
            }
        }
        else
        {
            echo "No record found";
        }
        ?>    
    </table>
</div>    
    
    
  </body>
</html>