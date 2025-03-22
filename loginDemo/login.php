<?php

    session_start();
    if($_SESSION['login'] == true){
        header("location: home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .login-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 360px;
            transition: transform 0.2s ease;
        }
        .login-card:hover {
            transform: translateY(-5px);
        }
        .form-control {
            border-radius: 30px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0,123,255,0.2);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 12px;
            font-size: 16px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .text-center {
            margin-top: 20px;
            font-size: 14px;
        }
        .text-center a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .text-center a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .brand-logo {
            width: 60px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center">
        <img src="https://via.placeholder.com/60" alt="Logo" class="brand-logo">
        <h3>Welcome Back!</h3>
        <p>Please login to your account</p>
    </div>

    <form action="loginUser.php" method="POST">
        <!-- Email -->
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div>

        <!-- Password -->
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>

        <!-- Login Button -->
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Forgot Password / Register -->
    <div class="text-center">
        <p class="mt-3">
            <a href="#">Forgot Password?</a> |
            <a href="#">Create an Account</a>
        </p>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
