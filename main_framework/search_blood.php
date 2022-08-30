<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="search_blood.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>SEARCH BLOOD</title>
</head>

<body>
    <!-- <li><a style="text-decoration: none;color:white;margin-top:20px; " class="nodec" href="../login_system/index.html">Home</a></li> -->
    <div>
        <a class="navbar-brand" href="../login_system/index.html" data-bs-toggle="tooltip" title="Home">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"
                style="width:40px;color:#7a0101;">
                <path
                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path
                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>

        </a>


    </div>
    <center>

        <h1>SEARCH BLOOD</h1>
        <div class="container">
            <!-- <div class= "jumbotron" style="margin-top:100px;margin-left:20%;margin-right:20%;margin-bottom:20px;"> -->
            <br><br>
            <form action="search_blood.php" method="POST" id="form" style="width:60%;">
                <div class="col">

                    <select name="bloodgroup" class="custom-select custom-select-sm">
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
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div><br>
                <button style="background-color: #ff0000;border-color: #ff0000" type="submit" name="search"
                    class="btn btn-primary">Search</button>

            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Blood</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Phonenumber</th>
                        <th scope="col">Availability</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                   include('backend/_search_blood.php');
            
               ?>
                </tbody>
            </table>



            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
                crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.6.0.js"
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
            <script src="search_blood.js"></script>
</body>

</html>