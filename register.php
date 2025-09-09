<?php
session_start();
include("config/connectDB.php");

$error_message = "";

if (isset($_POST['register'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = mysqli_query($conn, "SELECT * FROM account WHERE email='$email'");
  if (mysqli_num_rows($check) > 0) {
    $error_message = "อีเมลนี้ถูกใช้แล้ว";
  } else {
    $sql = "INSERT INTO account (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
      header("Location: login.php");
      exit;
    } else {
      $error_message = "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>สมัครสมาชิก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <h3 class="mb-4">สมัครสมาชิก</h3>
        <?php if ($error_message): ?>
          <div class="alert alert-danger"><?= $error_message; ?></div>
        <?php endif; ?>
        <form method="post">
          <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <button type="submit" name="register" class="btn btn-success w-100">สมัครสมาชิก</button>
        </form>
        <p class="mt-3">มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
      </div>
    </div>
  </div>
</body>
</html>