<?php
include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>จัดการลูกค้า</title>

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fc;
    }
    .sidebar {
        min-height: 100vh;
    }
</style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 bg-dark text-white sidebar p-3">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <ul class="nav nav-pills flex-column gap-2">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link text-white">หน้าหลักแอดมิน</a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link text-white">จัดการสินค้า</a>
                </li>
                <li class="nav-item">
                    <a href="orders.php" class="nav-link text-white">จัดการออเดอร์</a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="nav-link active">จัดการลูกค้า</a>
                </li>
                <li class="nav-item mt-3">
                    <a href="logout.php" class="nav-link text-danger">ออกจากระบบ</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">จัดการลูกค้า</h2>
                <span class="badge bg-primary">
                    ผู้ดูแลระบบ: <?php echo $_SESSION['aname']; ?>
                </span>
            </div>

            <!-- Content -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="text-muted mb-0">
                        หน้านี้ใช้สำหรับจัดการข้อมูลลูกค้า (เพิ่ม / แก้ไข / ลบ)
                    </p>

                    <!-- ตัวอย่างพื้นที่ตาราง -->
                    <div class="mt-4 text-center text-secondary">
                        <p>📋 ตารางรายชื่อลูกค้า (กำลังพัฒนา)</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
