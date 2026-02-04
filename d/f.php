<?php
// ตั้งค่าเพื่อแสดงผลภาษาไทยให้ถูกต้อง
header('Content-Type: text/html; charset=utf-8');

// ฟังก์ชันสำหรับแปลงรูปแบบวันที่ (d-m-Y)
function format_date_thai($date_str) {
    if (empty($date_str) || $date_str == 'N/A') {
        return 'N/A';
    }
    try {
        $date = new DateTime($date_str);
        return $date->format('d/m/Y'); 
    } catch (Exception $e) {
        return $date_str; 
    }
}
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปใบสมัครงาน - ปภัสสร อุณวงค์ (BB)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root{
            --brand: #0d6efd;
            --soft: #f8fafc;
        }
        body{background: linear-gradient(180deg,#f5f7fb 0%,#ffffff 100%);}
        .brand-bar{background: linear-gradient(90deg,var(--brand),#6610f2);height:6px;border-radius:6px}
        .card {border: none; box-shadow: 0 6px 24px rgba(15, 23, 42, .08);}
        .result-container {max-width: 800px;}
        .table-custom tr td:first-child {font-weight: 500; width: 30%;}
    </style>
</head>

<body>

<div class="container result-container py-5">
    <div class="card p-4">
        <div class="brand-bar mb-3"></div>
        <div class="text-center mb-4">
            <h4 class="mb-1 text-success">✅ รับใบสมัครเรียบร้อยแล้ว</h4>
            <div class="text-muted">ปภัสสร อุณวงค์ (BB) จะติดต่อกลับไปโดยเร็วที่สุด</div>
        </div>

        <?php
        // *********** ตรวจสอบและรับข้อมูล POST ***********
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // ดึงข้อมูลฟอร์ม
            $position = htmlspecialchars($_POST['position'] ?? 'N/A');
            $prefix = htmlspecialchars($_POST['prefix'] ?? 'N/A');
            $fullname = htmlspecialchars($_POST['fullname'] ?? 'N/A');
            $dob = format_date_thai($_POST['dob'] ?? 'N/A');
            $education = htmlspecialchars($_POST['education'] ?? 'N/A');
            $skills = htmlspecialchars($_POST['skills'] ?? 'N/A');
            $experience = htmlspecialchars($_POST['experience'] ?? 'N/A');

            // ดึงข้อมูลไฟล์ (จาก $_FILES)
            $resume_status = '<span class="text-danger">ไม่มีไฟล์แนบ</span>';
            if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
                $file_name = htmlspecialchars($_FILES['resume']['name']);
                $file_size_mb = number_format($_FILES['resume']['size'] / 1048576, 2); 
                $resume_status = "<span class='text-success'>ไฟล์:</span> " . $file_name . " ($file_size_mb MB)";
                // หมายเหตุ: โค้ดจริงต้องมี move_uploaded_file() เพื่อบันทึกไฟล์
            }
        ?>

        <h5 class="form-section-title mb-3 border-bottom pb-2">สรุปข้อมูลการสมัคร</h5>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-custom">
                <tbody>
                    <tr>
                        <td>ตำแหน่งที่สมัคร</td>
                        <td class="text-primary fw-bold"><?php echo $position; ?></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-สกุล</td>
                        <td><?php echo $prefix . ' ' . $fullname; ?></td>
                    </tr>
                    <tr>
                        <td>วันเดือนปีเกิด</td>
                        <td><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                        <td>ระดับการศึกษาสูงสุด</td>
                        <td><?php echo $education; ?></td>
                    </tr>
                    <tr>
                        <td>ความสามารถพิเศษ</td>
                        <td><?php echo empty($skills) ? '-' : nl2br($skills); ?></td>
                    </tr>
                    <tr>
                        <td>ประสบการณ์ทำงาน</td>
                        <td><?php echo empty($experience) ? '-' : nl2br($experience); ?></td>
                    </tr>
                    <tr>
                        <td>ประวัติย่อ (Resume)</td>
                        <td><?php echo $resume_status; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
        } else {
            // กรณีเข้าถึงโดยตรง
            echo '<div class="alert alert-warning text-center" role="alert">';
            echo '<strong>ข้อผิดพลาด:</strong> ไม่พบข้อมูลการสมัคร กรุณาส่งฟอร์มผ่านหน้าใบสมัครงาน';
            echo '</div>';
        }
        ?>
        
        <div class="text-center mt-4">
            <a href="javascript:history.back()" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> ย้อนกลับไปหน้าฟอร์ม
            </a>
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>