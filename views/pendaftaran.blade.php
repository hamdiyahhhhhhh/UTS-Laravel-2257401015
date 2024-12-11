<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF8DC;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #CD5C5C;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #FFFFF0	;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: 	#FFFFF0;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        .button {
            background-color: 	#5F9EA0;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #218838;
        }

        .form-footer {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
        }

        .form-footer a {
            color: #FFD700;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="hamdiyah" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
  
              <input type="email" id="email" name="hamdiyah22@gmail.com" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="12345678" placeholder="Enter your password" required>
            </div>
            <a href=home style="margin-bottom: 5px;" type="submit" class="button">Daftar</a>
            <a href=login style="margin-bottom: 5px;" type="submit" class="button">Kembali</a>
        </form>
        </div>
    </div>
</body>
</html>