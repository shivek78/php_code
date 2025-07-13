<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>
  <center>
    <!--- method and redirction   section--->
    <form method="post" action="loging.php">
      <table border="2">
        <!--- user name section--->
        <tr>
          <th>User name</th>
          <td>
            <input type="text" name="user_name">
          </td>
        </tr>
        <!--- password  section--->

        <tr>
          <th>Password</th>
          <td>
            <input type="password" name="_password">
          </td>
        </tr>
        <!--- button   section--->


        <tr>
          <td>
            <input type="submit" value=" submit" name="-submit">

          </td>
          <td> <input type="reset" value=" Reset" name="-submit"></td>
        </tr>
      </table>
    </form>
  </center>


  <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = isset($_POST['user_name']) ? $_POST['user_name'] : '';
  $pass = isset($_POST['_password']) ? $_POST['_password'] : '';

  if (strcmp($user, 'shivek') === 0 && strcasecmp($pass, 'shivek1') === 0) {
    header("Location: function.php");
    exit;
  } else {
    echo '<font color="red" size="5">You are an invalid user</font>';
  }
}
?>











</body>

</html>
