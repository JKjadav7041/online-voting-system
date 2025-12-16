<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #ff9933, #ffffff, #138808);
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease-in-out;
        }

        .login-container {
            width: 350px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            margin: 100px auto;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 95%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background: #5a67d8;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_login_process.php" method="POST">
            <input type="text" name="admin_username" placeholder="Username" required><br>
            <input type="password" name="admin_password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
