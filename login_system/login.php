<doctype html>

    <head>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="header-area">

            <ul class="links">

                <li><a style="text-decoration: none ;color: #ff0000" class="nodec" href="index.html">Home</a></li>
            </ul>
        </div>
        <div class="login-page">
            <div class="form">
                <!-- <form class="register-form">
  
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>-->
                <form class="login-form" method="post" action="backend/_login.php">
                    <input type="email" name="email" placeholder="email" />
                    <input type="password" name="password" placeholder="password" />
                    <button type="submit" name="submit">login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p><br>
                    <a class="message" href="forgot.php">Forgot your password</a>
                </form>
            </div>
        </div>
    </body>

    </html>