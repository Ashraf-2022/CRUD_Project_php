<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h2 {
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <center>
    <h2>Edit User</h2>
  </center>
  <form method="post" action="">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <label for="mobile">Mobile Number:</label>
    <input type="tel" id="mobile" name="mobile" required>
    <br>

    <button type="submit">Update User</button>
    <a href="delete.php">Delete_User</a>
  </form>
</body>

</html>
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars(strip_tags($_POST['name']));
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);


  $sql = "UPDATE add_users SET name='$name', email='$email', password='$password', mobile='$mobile'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    die("Query Failed") . mysqli_error($conn);
  }
}
?>