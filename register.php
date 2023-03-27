<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check that all fields are filled in
  if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "All fields are required.";
  }

  // Check that email is in a valid format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
  }

  // Check that password and confirm password match
  if ($password !== $confirm_password) {
    echo "Passwords do not match.";
  }

  // Registration successful
  echo "Registration successful!" .$first_name;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOG IN </h1>
</body>
</html>

<form method="POST" action="register.php">
  <label for="email">Email address:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <input type="submit" value="Login">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check that both fields are filled in
  if (empty($email) || empty($password)) {
    echo "Both fields are required.";
  }

  echo "Welcome" .$first_name;
  exit();
}
?>

