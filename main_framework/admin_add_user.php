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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD USER</title>
    <link rel="stylesheet" href="admin_add_user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin_dashboard.php">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" style="width:30px;" alt="BACK">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                </svg>
            </a>

            <h3 class="container-fluid  text-white" style="text-align: center">ADD USER</h3>

        </div>
    </nav>
    <div class="container">
        <div class="jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;">

            <form action="backend/_admin_add_user.php" method="post" id="form">
                <div class="form-group">
                    <!-- username -->
                    <input type="text" name="username" class="form-control" placeholder="User name" required>
                </div><br>
                <div class="form-group">
                    <!-- password -->
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div> <br>
                <div class="form-group">

                    <input type="date" id="dob" name="dob" class="form-control" required>
                </div><br>
                <div class="form-group">

                    <select name="sex" class="custom-select custom-select-sm form-control" required>
                        <option value="" selected>Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="LGBTQ">LGBTQ</option>
                    </select>
                </div><br>
                <div class="form-group">

                    <select name="bloodgroup" class="custom-select custom-select-sm form-control" required>
                        <option value="" selected>Blood group</option>
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

                    <input type="text" name="weight" class="form-control" placeholder="Weight" required>
                </div><br>
                <div class="form-group">

                    <textarea name="address" rows="3" cols="90" class="form-control" placeholder="Address"
                        required></textarea>
                </div><br>
                <div class="form-group">

                    <input type="text" name="city" class="form-control" placeholder="City" required>
                </div><br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div><br>
                <div class="form-group">
                    <input type="text" name="phonenumber" class="form-control" placeholder="Mobile number" required>
                </div><br>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary ">SUBMIT</button>
                    <a href="admin_dashboard.php" class="btn btn-danger">CANCEL</a>
                </div>

            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="admin_add_user.js"></script>
</body>

</html>