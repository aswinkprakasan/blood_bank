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
<li><a style="text-decoration: none;color:white;margin-top:20px; " class="nodec" href="../login_system/index.html">Home</a></li>
    <center>
      
        <h1>SEARCH BLOOD</h1>
        <div class="container">
            <br><br>
            <form action="search_blood.php" method="POST">
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
                        <th scope="col">Blood Group</th>
                        <th scope="col">Address</th>
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

            
</body>

</html>