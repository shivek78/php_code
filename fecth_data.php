<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My General Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f6fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      text-align: center;
      width: 90%;
      max-width: 500px;
    }

    h1 {
      color: #2f3640;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      color: #57606f;
      line-height: 1.6;
    }

    .button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #487eb0;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #40739e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Your Page</h1>
    <p>This is a general-purpose layout. You can use this page to display user data, show a dashboard, or simply welcome someone after login.</p>

  </div>
<?php
$con = mysqli_connect("localhost", "root", "", "database1");

$sql = "SELECT * FROM `loging_data`";
$record = $con->query($sql);

$n = mysqli_num_rows($record);

if ($n > 0) {
  while ($row = mysqli_fetch_array($record)) {
    echo $row[0] . " " . $row[1] . " " . $row[2];
    echo '<br>';
  }
} else {
  echo 'No data found';
}
?>








</body>
</html>

