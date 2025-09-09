<?php
session_start();

// ถ้ายังไม่ได้ล็อกอิน ให้เด้งไป login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>บัญชีของฉัน</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="index.php">
        <i class="bi bi-arrow-left-square-fill fs-3 my-3 text-dark"></i>
      </a>
      <a class="navbar-brand" href="index.php">MyShop</a>
      <div class="d-flex">
        <a href="logout.php" class="btn btn-outline-danger">ออกจากระบบ</a>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <h2>ข้อมูลบัญชี</h2>
    <div class="card p-3">
      <p><strong>Username:</strong> <?= $_SESSION['username']; ?></p>
      <p><strong>Email:</strong> <?= $_SESSION['email']; ?></p>
    </div>
  </div>
</body>
</html>