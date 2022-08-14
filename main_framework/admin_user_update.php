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
  <title>EDIT USER</title>
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

    <h3 class="container-fluid  text-white" style="text-align: center">UPDATE USER</h3>
    <!-- <div class="d-flex">
    <a class="navbar-brand" href="https://heroicons.com/">
        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" style="width:30px;" stroke="currentColor" strokeWidth={2}>
            <path strokeLinecap="round" strokeLinejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
    </a>
    </div> -->
  </div>
</nav>
    <?php
        include 'config.php';

        $edit=$_POST['update'];
        $sql="SELECT * FROM donor_table WHERE email='$edit'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            while($data=mysqli_fetch_array($result))
            {
                ?>

            <div class= "container">
            <div class= "jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;">

            <form action="backend/_admin_user_update.php" method="post">
                <input type="hidden" name="hide" value="<?php echo $data['email'] ?>">
                <div class="form-group">
                    <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" placeholder="User name">
                </div><br>
                
                <div class="form-group">
                    <input type="date" id="dob" name="dob" value="<?php echo $data['dob'] ?>" class="form-control">
                </div><br>
                <div class="form-group">
                    <select name="sex"  class="custom-select custom-select-sm form-control">
                        <option selected value="<?php echo $data['sex'] ?>"><?php echo $data['sex'] ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="LGBTQ">LGBTQ</option>
                    </select>
                </div><br>
                <div class="form-group">

                    <select name="bloodgroup"  class="custom-select custom-select-sm form-control">
                        <option selected value="<?php echo $data['bloodgroup'] ?>"><?php echo $data['bloodgroup'] ?></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div><br>
                <div class="form-group">

                    <input type="text" name="weight" value="<?php echo $data['weight'] ?>" class="form-control" placeholder="Weight">
                </div><br>
                <div class="form-group">

                    <textarea name="address" rows="3" cols="90" class="form-control" placeholder="Address"><?php echo $data['address'] ?></textarea>
                </div><br>
                <div class="form-group">

                    <input type="text" name="city" value="<?php echo $data['city'] ?>" class="form-control" placeholder="City">
                </div><br>
                <div class="form-group">
                    <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control" placeholder="Email" disabled>
                </div><br>
                <div class="form-group">
                    <input type="text" name="phonenumber" value="<?php echo $data['phonenumber'] ?>" class="form-control" pattern="[6-9]\d{9}" title="enter a valid phno" placeholder="Mobile number">
                </div><br>
            <div class="form-group">
                <button type="submit" name="update" class="btn btn-primary ">UPDATE</button>
                <a href="admin_dashboard.php" class="btn btn-danger">CANCEL</a>
            </div>

</form>
   
</div>
</div>

                <?php
            }
        }
        else
        {
            echo '<script>alert("no record found");</script>';
        }

    ?>

</body>
</html>