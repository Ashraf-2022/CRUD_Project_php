<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>User_Crud</title>
</head>

<body>
  <div class="container">
    <div class="wrapping">
      <div class="d-flex p-2 d-flex justify-content-between mb-2">
        <h1>Add_User</h1>
        <a href="index.php"><i data-feather="corner-down-left"></i></a>
      </div>
      <form action="index.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="false">
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Your email" autocomplete="false">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter Your password"
            autocomplete="false">
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">mobile_phone</label>
          <input type="tel" class="form-control" name="mobile" placeholder="Enter Your Phone number"
            autocomplete="false">
        </div>
        <input type="submit" class="btn btn-dark" value="Save" name="save">

      </form>
    </div>
  </div>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/icon.js"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>