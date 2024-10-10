<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 40%;
            margin-top: 80px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group select {
            padding-right: 30px;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons button:hover {
            background-color: #45a049;
        }

        .buttons button[type="reset"],
        .buttons button[type="button"] {
            background-color: #f44336;
        }

        .buttons button[type="button"]:hover,
        .buttons button[type="reset"]:hover {
            background-color: #e53935;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Logo</div>
        <div class="name">Registration Page</div>
        <div class="extra-button">
            <button>NEW</button>
        </div>
    </div>
    <div class="container">
        <h2>Register</h2>
        <form action="submit.php" method="post">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>


            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>


            <div class="form-group">
                <label for="age">Age</label>
                <select id="age" name="age" required>
                    <option value="" disabled selected>Select age</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="36-45">36-45</option>
                </select>
            </div>


            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="" disabled selected>Select country</option>
                    <option value="us">United States</option>
                    <option value="lk">Sri Lanka</option>
                    <option value="in">India</option>
                </select>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>


            <div class="buttons">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
                <button type="button">Exit</button>
            </div>
        </form>
    </div>

</body>

</html>