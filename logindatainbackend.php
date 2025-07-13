<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>loging</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 20px;
  text-align: center;
}

h1 {
  color: #333;
}

form {
  background-color: #fff;
  padding: 20px;
  margin: auto;
  width: 300px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-top: 10px;
  text-align: left;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #007BFF;
  color: white;
  border: none;
  padding: 12px;
  margin-top: 15px;
  width: 100%;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #65b300dd;
}

  </style>
  <body>
<h1>Welcome </h1>
<form method="post">
  <label for="username">Name:</label>
  <input type="text" id="username" name="username"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
<input type="submit" name="submit" value="Submit">


</form>
<?php
$con = mysqli_connect('localhost', 'root', '', 'database1');

if (isset($_POST['submit']))
  {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "INSERT INTO loging_data(name, email, password) VALUES('$name', '$email', '$password')";
  $execute = mysqli_query($con, $query);
  }

?>


  </body>
</html>
