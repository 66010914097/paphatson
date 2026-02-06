<?php
session_start();
include_once("connectdb.php");
?>

<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Login</title>

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #4e73df, #1cc88a);
        min-height: 100vh;
    }
    .login-card {
        border-radius: 1rem;
    }
</style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card shadow login-card">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4 fw-bold">เข้าสู่ระบบหลังบ้าน - ปภัสสร อุณวงค์(BB)</h3>

                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="auser" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="apwd" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="Submit" class="btn btn-primary btn-lg">
                                Login
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <p class="text-center text-white mt-3 small">
                © <?php echo date("Y"); ?> Admin System
            </p>
        </div>
    </div>
</div>

<?php
if (isset($_POST['Submit'])) {

    $username = $_POST['auser'];
    $password = $_POST['apwd'];

    $sql = "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);

        if (password_verify($password, $data['a_password'])) {
            $_SESSION['aid']   = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];

            echo "<script>window.location='index2.php';</script>";
            exit;
        }
    }

    echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>";
}
?>

<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
