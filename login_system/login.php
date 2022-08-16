<doctype html>

    <head>
        <link rel="stylesheet" href="login.css">
        <title>LOGIN</title>
    </head>

    <body>
        <div class="header-area">

            <ul class="links">

                <li><a style="text-decoration: none ;color: #ff0000" class="nodec" href="index.html">Home</a></li>
            </ul>
        </div>
        <div class="login-page">
            <div class="form">

                <form class="login-form" method="post" id="form" action="backend/_login.php">
                    <input type="email" name="email" id="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="password" />
                    <button type="submit" name="submit">login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p><br>
                    <a class="message" href="forgot.php">Forgot your password</a>
                </form>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="login.js"></script>
   
    </body>

    </html>