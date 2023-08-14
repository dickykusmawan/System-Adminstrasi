<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url("Jpg/background.jpg"); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
        }

        .logo img {
            width: 80px; /* Adjust the logo size as needed */
            height: auto;
        }

        .app-name h2 {
            font-size: 30px; /* Adjust the font size as needed */
            margin-top: 15px;
            color: white;
        }

        form {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 95%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .app-name {
            text-align: center; /* Center align the text */
            margin-top: 15px;
            color: white;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="Jpg/logo.jpg" alt="Logo">
        </div>
        <div class="app-name">
            <h2>System Administrasi</h2>
            <h2>PT. Parna Agromas</h2>
        </div>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>