<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ปภัสสร อุณวงค์ (BB)</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 50px;
    }
    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #0d6efd;
    }
    .form-control {
      border-radius: 8px;
    }
    .form-check-label {
      font-size: 0.9rem;
    }
    .btn {
      border-radius: 8px;
    }
  </style>
</head>

<body>

<div class="container">
  <div class="form-container">
    <h1>ฟอร์มสมัครสมาชิก -- ปภัสสร อุณวงค์ (BB) -- ChatGPT</h1>
    <form method="post" action="">
      <div class="mb-3">
        <label for="fullname" class="form-label">ชื่อ-สกุล</label>
        <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทร</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>

      <div class="mb-3">
        <label for="height" class="form-label">ความสูง (ซม.)</label>
        <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">สีที่ชอบ</label>
        <input type="color" class="form-control form-control-color" id="color" name="color">
      </div>

      <div class="mb-3">
        <label for="major" class="form-label">สาขาวิชา</label>
        <select class="form-select" name="major" id="major">
          <option value="การบัญชี">การบัญชี</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="การตลาด">การตลาด</option>
          <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" name="Submit" class="btn btn-primary">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="button" class="btn btn-info" onClick="window.location='http://www.msu.ac.th';">Go to MSU</button>
        <button type="button" class="btn btn-success" onClick="window.print();">พิมพ์</button>
      </div>
    </form>

    <hr>

    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        echo  "ชื่อ-สกุล: ".$fullname."<br>";    
        echo  "เบอร์โทร: ".$phone."<br>";    
        echo "ความสูง: ".$height."ซม.<br>";    
        echo "สีที่ชอบ: ".$color."<div style='background:{$color}; width: 50px; height: 50px;'></div>";    
        echo "สาขาวิชา: ".$major."<br>";    
    }
    ?>
  </div>
</div>

<!-- Bootstrap JS (optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
