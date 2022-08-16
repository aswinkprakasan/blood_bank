<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="register.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>REGISTER</title>
</head>

<body>
<li><a style="text-decoration: none;color:white ;margin-top:20px" class="nodec" href="../login_system/index.html">Home</a></li>
    <div class="container">
        <br><br>
        <p align="center">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="100" fill="currentColor"
                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            </svg>
        </p>
        
        <div class= "container">
        <div class= "jumbotron" style="margin-top:5px;margin-left:20%;margin-right:20%;margin-bottom:20px;">
        <form method="post" action="backend/_register.php" id="form">
            <div class="col">
                <div class="col">
                    <!-- username -->
                    <input type="text" name="username" class="form-control" placeholder="User name" title="Only right first name" required>
                </div><br>
                <div class="col">
                    <!-- password -->
                    <input type="password" name="password" placeholder="Password" class="form-control"required>
                </div> <br>
                <div class="col">
                    <!-- password -->
                    <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control"required>
                </div> <br>
                <div class="col">

                    <input type="date" id="dob" name="dob" class="form-control"required>
                </div><br>
                <div class="col">

                    <select name="sex" class="custom-select custom-select-sm"required>
                        <option selected>Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div><br>
                <div class="col">

                    <select name="bloodgroup" class="custom-select custom-select-sm form-control" required>
                        <option selected>Blood group</option>
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
                <div class="col">

                    <input type="text" name="weight" class="form-control" placeholder="Weight"required>
                </div><br>
                <div class="col">

                    <textarea name="address" rows="3" cols="90" class="form-control" placeholder="Address"required></textarea>
                </div><br>
                <div class="col">

                    <input type="text" name="city" class="form-control" placeholder="City"required>
                </div><br>
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email"required>
                </div><br>
                <div class="col">
                    <input type="text" name="phonenumber" class="form-control" placeholder="Mobile number" title="enter a valid phone number"required>
                </div><br>
            </div>
            <div class="col">
                <button style="background-color: #ff0000; border-color: #ff0000"type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
        </form>
        <br>
        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="register.js"></script>        
</body>

</html>