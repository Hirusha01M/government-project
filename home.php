<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> home Page</title>
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
    </body>
    </html>