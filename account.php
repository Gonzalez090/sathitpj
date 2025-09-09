<?php
session_start();
include("config/connectDB.php"); // เชื่อมต่อ DB

$error_message = "";

// ตรวจสอบว่ามีการส่งฟอร์มหรือไม่
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // ดึงข้อมูลจากตาราง account
  $sql = "SELECT * FROM account WHERE email = '$email' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if ($row) {
    // เทียบ password ตรงๆ (ถ้า hash ไว้ควรใช้ password_verify)
    if ($password === $row['password']) {
      // เก็บค่าไว้ใน session
      $_SESSION['id'] = $row['account_id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $row['email'];

      // ไปหน้า home.php
      header("Location: home.php");
      exit;
    } else {
      $error_message = "❌ รหัสผ่านไม่ถูกต้อง";
    }
  } else {
    $error_message = "❌ ไม่พบบัญชีอีเมลนี้";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | JS Club</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #fff;
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>

  <!-- Logo -->
  <nav class="navbar navbar-expand-lg bg-light py-3 border-bottom bordor-dark ">
    <div class="container-fluid d-flex justify-content-center">

      <a href="Home.php" class="navbar-brand fs-2 fw-bolder text-uppercase mx-3 ">JS</a>


    </div>
  </nav>

  <!-- Login/Register Form -->
  <div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-md-5">
        <?php if (!empty($error_message)): ?>
          <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
          <div class="mb-3">
            <input type="username" class="form-control" name="username" placeholder="username" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="password" required>
          </div>
          <button type="submit" name="submit" class="btn btn-outline-dark w-100 btn-custom my-1">เข้าสู่ระบบ</button>
          <a href="register.php" class="btn btn-dark w-100 btn-custom">สมัครสมาชิก</a>
        </form>

        <div class="text-center mt-3">หรือ</div>

        <!-- Social Icons -->
        <div class="d-flex justify-content-center align-items-center mt-3  gap-5">
          <a href="#"><i class="bi bi-facebook text-primary fs-1"></i></a>
          <a href="#"><i class="bi bi-google text-danger fs-1"></i></a>
          <a href="#"><i class="bi bi-envelope text-warning fs-1"></i></a>
        </div>

      </div>
    </div>
  </div>

</body>

</html>