<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User</title>
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
    <h2>Delete User</h2>
  </center>
  <form method="post" action="">
    <label for="id">User ID:</label>
    <input type="text" id="id" name="id" required>
    <br>

    <button type="submit">Delete User</button>
  </form>
</body>

</html>
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];

  $sql = "DELETE FROM add_users WHERE id=$id";
  $res = mysqli_query($conn, $sql);
  if (!$res) {
    die('Error: ' . mysqli_error($conn));
  } else {
    echo "<p>Successfully deleted user with ID $id.</p>";
    header("Location: index.php");
  }

}

$conn->close();
?>