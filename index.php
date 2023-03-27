<!DOCTYPE html>
<html>
<head>
  <title>Registration and Login Form</title>
</head>
<body>
  <h1>Registration Form</h1>
  <?php
  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate form data
    $errors = array();
    if (empty($firstName)) {
      $errors[] = 'First name is required.';
    }
    if (empty($lastName)) {
      $errors[] = 'Last name is required.';
    }
    if (empty($email)) {
      $errors[] = 'Email address is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email address is invalid.';
    }
    if (empty($password)) {
      $errors[] = 'Password is required.';
    } elseif ($password !== $confirmPassword) {
      $errors[] = 'Passwords do not match.';
    }

    // Display errors or success message
    if (!empty($errors)) {
      echo '<div style="color: red;">';
      echo '<ul>';
      foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error) . '</li>';
      }
      echo '</ul>';
      echo '</div>';
    } else {
      echo '<div style="color: green;">';
      echo 'Registration successful!';
      echo '</div>';
      // TODO: Save user data to database or file
    }
  }
  ?>
  <form method="post">
    <label>First Name:</label>
    <input type="text" name="firstName" required>
    <br><br>
    <label>Last Name:</label>
    <input type="text" name="lastName" required>
    <br><br>
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>
    <label>Confirm Password:</label>
    <input type="password" name="confirmPassword" required>
    <br><br>
    <input type="submit" value="Register">
    <button type="button"><a href="login.php">Log-in</a></button>
  </form>

  
</body>
</html>
