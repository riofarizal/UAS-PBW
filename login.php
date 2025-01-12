<?php
session_start();
include 'koneksi.php';

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $result = $conn->query("SELECT * FROM user WHERE username='$username'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            // Incorrect password
            $error = "Password salah. Silakan coba lagi.";
        }
    } else {
        // Username not found
        $error = "Username tidak ditemukan. Silakan coba lagi.";
    }
}
?>
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body class="bg-danger-subtle">
    <!-- Form login start -->
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border- shadow rounded-5">
            <div class="card-body">
              <div class="text-center mb-3">
                <i class="bi bi-person-circle h1 display-4"></i>
                <p>My Daily Journal</p>
                <hr>
                <div>
                  <?php
                  if (isset($_GET['error'])) {
                      echo "<div class='alert alert-danger'>Invalid username or password.</div>";
                  }
                  ?>
                  <form action="" method="post">
                    <input type="text" name="username" class="form-control my-4 py-2 rounded-4" placeholder="Username" required />
                    <input type="password" name="password" class="form-control my-4 py-2 rounded-4" placeholder="Password" required />
                    <div class="text-center my-3 d-grid">
                      <button class="btn btn-danger rounded-4">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Form login End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php

?>
