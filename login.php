<?php
session_start();
include("config/connectDB.php");

$error_message = "";

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE email='$email'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");
            exit;
        } else {
            $error_message = "รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        $error_message = "ไม่พบบัญชีนี้";
    }
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light py-3 border-bottom bordor-dark">
        <div class="container-fluid">

            <a href="Home.php" class="navbar-brand fs-2 fw-bolder text-uppercase mx-3">JS</a>

        </div>
    </nav>

    <a href="index.php">
        <i class="bi bi-arrow-left-square-fill fs-3 my-3 text-dark"></i>
    </a>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h3 class="mb-4">เข้าสู่ระบบ</h3>
                <?php if ($error_message): ?>
                    <div class="alert alert-danger"><?= $error_message; ?></div>
                <?php endif; ?>
                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <label for="email">email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <label for="password">password</label>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                </form>
                <p class="mt-3">ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a></p>
            </div>
        </div>
    </div>
</body>

</html>