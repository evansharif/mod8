<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Login Form</h1>
  <?php
  // Handle login form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get login data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // TODO: Validate login data against user data in database or file

    // Redirect to welcome page on successful login
    if ($loginSuccessful) {
      header("Location: welcome.php?name=" . urlencode($firstName));
      exit();
    } else {
      echo '<div style="color: red;">';
      echo 'Invalid email or password.';
      echo '</div>';
    }
  }
  ?>
  <form method="post">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>
    <input type="submit" value="Login">
    <button type="button"><a href="index.php">Back</a></button>
  </form>



</body>
</html>