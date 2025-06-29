<?php
session_start();
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    
    if (!$stmt) {
        die("Prepare failed: " . $mysqli->error);  // 🔍 This line will show the real SQL error
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login - Red Heart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .login-container {
      max-width: 400px;
      margin: 80px auto;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container login-container">
    <div class="card shadow">
      <div class="card-header bg-danger text-white text-center">
        <h4>Admin Login</h4>
      </div>
      <div class="card-body">

        <!-- Display Error Message -->
        <?php if (isset($_SESSION['error'])): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
        <?php endif; ?>

        <form method="POST" onsubmit="return validateForm()">
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter admin username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-danger btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- JavaScript for validation & Bootstrap -->
  <script>
    function validateForm() {
      const user = document.getElementById('username').value.trim();
      const pass = document.getElementById('password').value.trim();
      if (user === '' || pass === '') {
        alert("Please enter both username and password.");
        return false;
      }
      return true;
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
