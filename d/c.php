<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสมัครสมาชิก | ปภัสสร อุณวงค์ (BB) -- Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* ปรับแต่งเพิ่มเติม */
    body {
        padding-top: 20px;
        background-color: #f8f9fa; /* สีพื้นหลังอ่อนๆ */
    }
    .form-box {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .result-box {
        margin-top: 20px;
        padding: 15px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        background-color: #e9ecef;
    }
    .color-swatch {
        width: 30px;
        height: 20px;
        display: inline-block;
        border: 1px solid #ccc;
        vertical-align: middle;
        margin-left: 5px;
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <div class="form-box">
                <h1 class="text-center mb-4 text-primary">ฟอร์มสมัครสมาชิก</h1>
                <p class="text-center mb-4">ปภัสสร อุณวงค์ (BB) -- Gemini</p>

                <form method="post" action="">

                    <div class="mb-3">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required autofocus placeholder="กรุณาใส่ชื่อ-สกุล">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone" required placeholder="เช่น 0812345678">
                    </div>

                    <div class="mb-3">
                        <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="height" name="height" step="5" min="100" max="220" required placeholder="100 - 220">
                            <span class="input-group-text">ซม.</span>
                        </div>
                        <div class="form-text">ใส่ค่าระหว่าง 100 ถึง 220 ซม. (เพิ่มทีละ 5)</div>
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">สีที่ชอบ</label>
                        <input type="color" class="form-control form-control-color" id="color" name="color" value="#0d6efd" title="เลือกสีของคุณ">
                    </div>

                    <div class="mb-4">
                        <label for="major" class="form-label">สาขาวิชา</label>
                        <select class="form-select" id="major" name="major">
                            <option value="การบัญชี">การบัญชี</option>
                            <option value="การจัดการ">การจัดการ</option>
                            <option value="การตลาด">การตลาด</option>
                            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4">
                        <button type="submit" name="Submit" class="btn btn-primary me-md-2">✅ สมัครสมาชิก</button>
                        <button type="reset" class="btn btn-secondary">🔄 ล้างข้อมูล (Reset)</button>
                        <button type="button" class="btn btn-info text-white" onClick=" window.location='http://www.msu.ac.th';">🚀 Go to MSU</button>
                        <button type="button" class="btn btn-outline-dark" onClick="window.print();">🖨️ พิมพ์</button>
                    </div>


                </form>

                <?php
                // ส่วนของ PHP แสดงผลลัพธ์
                if (isset($_POST['Submit'])){
                    $fullname = $_POST['fullname'] ;
                    $phone = $_POST['phone'] ;
                    $height = $_POST['height'] ;
                    $color = $_POST['color'] ;
                    $major = $_POST['major'] ;
                    
                    echo '<div class="result-box mt-4">';
                    echo '<h4 class="text-success">ข้อมูลที่ส่งมา:</h4>';
                    echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
                    echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
                    echo "<p><strong>ความสูง:</strong> $height ซม.</p>";
                    echo "<p><strong>สีที่ชอบ:</strong> $color <span class='color-swatch' style='background-color:{$color};' title='สีที่เลือก'></span></p>";
                    echo "<p><strong>สาขาวิชา:</strong> $major</p>";
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
cdn.jsdelivr.net