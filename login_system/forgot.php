<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORGOT PASSWORD</title>
    <link rel="stylesheet" href="forgot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

<li><a style="text-decoration: none ;color: white" class="nodec" href="index.html">Home</a></li>
    <div class="container my-4">
        <div class='row'>
            <div class='col-4'></div>
            <div class='col-4'>
                <div class="card" style="width: 30rem;">
                    <!--<img src="PARTIALS/forgot.png" class="card-img-top" alt="...">-->
                    <div class="card-body">

                        <h3 class="text-center">Forgot Password?</h3>
                        <form action="backend/_forgot.php" method="post">
                            <div class="form-group">

                                <input type="text" class="form-control" name="email" aria-describedby="emailHelp"
                                    placeholder=Email>
                            </div>
                            <div class="form-group">
                                <label for="date of birth">Date Of Birth</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                            <button style="background-color: #ff0000; border-color: #ff0000;"type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class='col-4'></div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>