<?php
include_once("check_login.php");
?>

<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>

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
                    <a href="index2.php" class="nav-link active">หน้าหลักแอดมิน</a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class="nav-link text-white">จัดการสินค้า</a>
                </li>
                <li class="nav-item">
                    <a href="orders.php" class="nav-link text-white">จัดการออเดอร์</a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="nav-link text-white">จัดการลูกค้า</a>
                </li>
                <li class="nav-item mt-3">
                    <a href="logout.php" class="nav-link text-danger">ออกจากระบบ</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">

            <!-- Top Bar -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Dashboard</h2>
                <div class="alert alert-primary mb-0 py-2">
                    👋 สวัสดีคุณ <strong><?php echo $_SESSION['aname']; ?></strong>
                </div>
            </div>

            <!-- Cards -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">สินค้า</h5>
                            <p class="display-6 fw-bold">📦</p>
                            <a href="products.php" class="btn btn-outline-primary btn-sm">จัดการสินค้า</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">ออเดอร์</h5>
                            <p class="display-6 fw-bold">🧾</p>
                            <a href="orders.php" class="btn btn-outline-success btn-sm">จัดการออเดอร์</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">ลูกค้า</h5>
                            <p class="display-6 fw-bold">👥</p>
                            <a href="customers.php" class="btn btn-outline-warning btn-sm">จัดการลูกค้า</a>
                        </div>
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
