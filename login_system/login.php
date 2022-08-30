<doctype html>

    <head>
        <link rel="stylesheet" href="login.css">
        <title>LOGIN</title>
    </head>

    <body>
        <div>
            <a class="navbar-brand" href="index.html" data-bs-toggle="tooltip" title="Home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"
                    style="width:40px;color:#e3e1e1;">
                    <path
                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                    <path
                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                </svg>

            </a>
        </div>

        <div class="login-page">
            <div class="form">
                <!-- <h5 style="text-align: center; font-size:23px; font-weight: bold; color: #000000;">LOGIN</h5> -->
                <img src="backend/drop1.gif" style="width:120px;">
                <form class="login-form" method="post" id="form" action="backend/_login.php">
                    <input type="email" name="email" id="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="password" />
                    <button type="submit" name="submit">login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p><br>
                    <a class="messager" href="forgot.php">Forgot password</a>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script src="login.js"></script>

    </body>

    </html>