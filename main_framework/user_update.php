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
    <link rel="stylesheet" href="user_update.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="user_dashboard.php">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2" style="width:30px;" alt="BACK">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z" />
                </svg>
            </a>

            <h3 class="container-fluid  text-white" style="text-align: center">UPDATE USER</h3>

        </div>
    </nav>
    <?php
        include 'config.php';

        $sql="SELECT * FROM donor_table WHERE email='$mail'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            while($data=mysqli_fetch_array($result))
            {
                ?>

    <div class="container">
        <div class="jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;">

            <form action="backend/_user_update.php" method="post" id="form">
                <input type="hidden" name="hide" value="<?php echo $data['email'] ?>">
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control"
                        placeholder="User name">
                </div></div><br>

                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                <path fill-rule="evenodd"
                                    d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <input type="date" id="dob" name="dob" value="<?php echo $data['dob'] ?>" class="form-control">
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M17.834 6.166a8.25 8.25 0 100 11.668.75.75 0 011.06 1.06c-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788 3.807-3.808 9.98-3.808 13.788 0A9.722 9.722 0 0121.75 12c0 .975-.296 1.887-.809 2.571-.514.685-1.28 1.179-2.191 1.179-.904 0-1.666-.487-2.18-1.164a5.25 5.25 0 11-.82-6.26V8.25a.75.75 0 011.5 0V12c0 .682.208 1.27.509 1.671.3.401.659.579.991.579.332 0 .69-.178.991-.579.3-.4.509-.99.509-1.671a8.222 8.222 0 00-2.416-5.834zM15.75 12a3.75 3.75 0 10-7.5 0 3.75 3.75 0 007.5 0z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <select name="sex" class="custom-select custom-select-sm form-control">
                        <option selected value="<?php echo $data['sex'] ?>"><?php echo $data['sex'] ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <img src="../login_system/backend/dropsvg.svg" style="width:15px;">
                        </span>
                    <select name="bloodgroup" class="custom-select custom-select-sm form-control">
                        <option selected value="<?php echo $data['bloodgroup'] ?>"><?php echo $data['bloodgroup'] ?>
                        </option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 0118.75 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 015.25 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84L4.168 6.241H2.25a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm4.878 13.543l1.872-7.662 1.872 7.662h-3.744zm-9.756 0L5.25 8.131l-1.872 7.662h3.744z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <input type="text" name="weight" value="<?php echo $data['weight'] ?>" class="form-control"
                        placeholder="Weight">
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>

                        </span>
                    <textarea name="address" rows="3" cols="90" class="form-control"
                        placeholder="Address"><?php echo $data['address'] ?></textarea>
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <input type="text" name="city" value="<?php echo $data['city'] ?>" class="form-control"
                        placeholder="City">
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>

                        </span>
                    <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control"
                        placeholder="Email" disabled>
                </div></div><br>
                <div class="form-group">
                <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">
                            <svg style="width:15px;color:black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                    clip-rule="evenodd" />
                            </svg>

                        </span>
                    <input type="text" name="phonenumber" value="<?php echo $data['phonenumber'] ?>"
                        class="form-control" placeholder="Mobile number">
                </div></div><br>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary ">UPDATE</button>
                    <a href="user_dashboard.php" class="btn btn-danger">CANCEL</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="user_update.js"></script>
</body>

</html>