<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Redirecting...</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      background-color: #f0f8ff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      color: #333;
    }

    .container {
      text-align: center;
      padding: 20px;
      border: 2px solid #3498db;
      border-radius: 10px;
      background: #ffffff;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1 {
      color: #3498db;
    }

    p {
      font-size: 18px;
    }

    a {
      text-decoration: none;
      color: #ffffff;
      background-color: #3498db;
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 10px;
      display: inline-block;
    }

    a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome, Shivek!</h1>
    <p>You are being redirected to your dashboard...</p>
   <?php

 $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  echo "<h3>Submitted Info</h3>";
echo "Username: $name<br>";
echo "Email: $email<br>";
echo "Password: $password<br>";



//panding


   ?>
  </div>
</body>
</html>

