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
  <title>Login | JS Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card mt-5 shadow">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">เข้าสู่ระบบ</h4>

          <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
          <?php endif; ?>

          <form method="POST" action="">
            <div class="mb-3">
              <label class="form-label">อีเมล</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">รหัสผ่าน</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-dark w-100">เข้าสู่ระบบ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
