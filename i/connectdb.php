<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "4097db";

$conn = mysqli_connect($host, $user, $pwd, $db)
        or die("เชื่อมต่อฐานข้อมูลไม่ได้");

mysqli_set_charset($conn, "utf8");
?>
