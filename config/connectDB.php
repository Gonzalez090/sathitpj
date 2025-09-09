<?php
$servername = "localhost";
$username = "root";  // ค่าเริ่มต้น XAMPP
$password = "";      // ค่าเริ่มต้น XAMPP
$dbname = "s6614421004"; // ชื่อ Database ของคุณ (เปลี่ยนตามจริง)

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>