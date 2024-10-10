
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('back.jpg');
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        .header {
            position: fixed;
            top: 20px;
            width: 90%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: whitesmoke;
            z-index: 1000;
            border-radius: 29px;
        }


        .header .logo {
            font-size: 18px;
            font-weight: bold;
        }


        .header .name {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            flex: 1;
        }


        .header .extra-button button {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .header .extra-button button:hover {
            background-color: #45a049;
        }





        .main-container {
            width: 70%;
            height: 60%;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            padding: 65px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }


        .content {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .welcome {
            width: 45%;
            font-size: 20px;
            padding: 60px;
        }

        .login-form {
            width: 30%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h3 {
            margin-bottom: 20px;
            text-align: center;
            color: darkblue;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form input[type="submit"] {
            width: 30%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;


        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .registration-link {
            text-align: center;
            margin-top: 10px;          
        }
    </style>
</head>

<body>
    <div class="header">

        <div class="logo">Logo</div>


        <div class="name"> </div>


        <div class="extra-button">
            <button> NEW</button>
        </div>
    </div>

    <div class="main-container">

        <div class="content">
            <div class="welcome">
                <h2> welcome</h2>
                <p> This is display discription area in page    </p>
            </div>

            <div class="login-form">
                <h3>Login</h3> <br>
                <form action="login.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>

                    <input type="submit" value="Login">

                </form> <br>
                <div class="registration-link">
                    <a href="register.php">Not registered? Create an account</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>