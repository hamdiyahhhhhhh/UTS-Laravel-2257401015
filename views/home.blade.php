<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF8DC;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #CD5C5C;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .navbar {
            background-color: #FFFFF0;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            color: #CD5C5C;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar a {
            color: #FFFFF0;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .welcome {
            margin-top: 20px;
        }

        .welcome h1 {
            font-size: 28px;
            color: #333;
        }

        .welcome p {
            font-size: 16px;
            color: #FFFFF0;
        }

        .button {
            display: inline-block;
            background-color: #5F9EA0;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #FFFFF0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h1>My Website Hamdiyah</h1>
            <div>
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            </div>
        </div>
        <div class="welcome">
            <h1>Selamat Datang</h1>
            <p>Nim: 2257401015</p>
            <p>Kelas: MI22A5</p>
            <a href=welcome style="margin-bottom: 5px;" type="submit" class="button">Logout</a>
            <a href=welcome style="margin-bottom: 5px;" type="submit" class="button">kembali</a>
        </div>
    </div>
</body>
</html>

