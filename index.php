<?php
include 'connection.php';

$action = false;

if (isset($_POST['save'])) {
  $name = htmlspecialchars(strip_tags($_POST['name']));
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_NUMBER_INT);


  if ($name == "" || $email == "" || $password == "") {
    echo "<script>alert('Please fill all fields')</script>";
  } else {
    $action = 'Add User';
    $sql = "INSERT INTO add_users (name,email,password,mobile) VALUES('$name','$email','$password','$mobile')";
    mysqli_query($conn, $sql);
  }
}

$sql = "SELECT * FROM add_users";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/toaster.css">
  <title>User_Crud</title>
</head>

<body>
  <div class="container">
    <div class="wrapping p-5 m-5">
      <div class="d-flex p-2 justify-content-between mb-2">
        <h1>All Users</h1>
        <a href="add_user.php"><i data-feather="user-plus"></i></a>
      </div>
      <hr>
      <table class="table table-dark table-striped">
        <thead>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Action</th>
        </thead>
        <tbody>
          <?php while ($user = $res->fetch_assoc()) { ?>
            <tr>
              <td>
                <?php echo $user['id'] ?>
              </td>
              <td>
                <?php echo $user['name'] ?>
              </td>
              <td>
                <?php echo $user['email'] ?>
              </td>
              <td>
                <?php echo $user['mobile'] ?>
              </td>
              <td>
                <div class="d-flex justify-content-evenly">
                  <a style="text-decoration: none; background-color:red; color:#fff;padding:3px;border-radius: 2px;"
                    href="delete.php">Delete</a>
                  <a style="text-decoration: none; background-color:green; color:#fff;padding:3px;border-radius: 2px;"
                    href="edit_form.php">Edit</a>

                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/toaster.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/icon.js"></script>
  <script src="js/main.js"></script>

  <?php
  if ($action != false) {
    if ($action == 'Add User') {
      ?>
      <script>add_user()</script>
    <?php }
  }
  ?>
  <script>
    feather.replace();
  </script>
</body>

</html>