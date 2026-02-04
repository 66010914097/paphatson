<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>แบบฟอร์มสมัครงาน — ปภัสสร อุณวงค์ (BB)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --brand: #0d6efd;
      --soft: #f8fafc;
    }
    body{background: linear-gradient(180deg,#f5f7fb 0%,#ffffff 100%);}
    .brand-bar{background: linear-gradient(90deg,var(--brand),#6610f2);height:6px;border-radius:6px}
    .card {border: none; box-shadow: 0 6px 24px rgba(15, 23, 42, .08);}
    .form-section-title{font-weight:600;color:#243b55}
    .required::after{content:" *";color:#dc3545}
    .floating-help{font-size:.9rem;color:#6c757d}
    .company-logo{width:64px;height:64px;border-radius:12px;object-fit:cover}
    @media (min-width:992px){
      .form-card{margin-top:40px}
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card p-4 form-card">
          <div class="brand-bar mb-3"></div>
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='64' height='64'><rect width='100%' height='100%' fill='%230d6efd'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-family='Arial' font-size='28' fill='white'>SH</text></svg>" alt="logo" class="company-logo">
            <div>
              <h4 class="mb-0">ปภัสสร อุณวงค์ (BB)</h4>
              <div class="text-muted">แบบฟอร์มสมัครงาน (Multiple Positions)</div>
            </div>
            <div class="ms-auto text-end">
              <small class="text-muted">กรุณากรอกข้อมูลให้ครบถ้วน</small>
            </div>
          </div>

          <form action="f.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate> 
            <div class="mb-3">
              <label for="position" class="form-label required">ตำแหน่งที่ต้องการสมัคร</label>
              <select id="position" name="position" class="form-select" required>
                <option value="">-- เลือกตำแหน่ง --</option>
                <option>Software Engineer (วิศวกรซอฟต์แวร์)</option>
                <option>UI/UX Designer (นักออกแบบประสบการณ์ผู้ใช้)</option>
                <option>Data Analyst (นักวิเคราะห์ข้อมูล)</option>
                <option>Marketing Executive (ผู้บริหารการตลาด)</option>
                <option>Sales Representative (พนักงานขาย)</option>
                <option>HR Officer (เจ้าหน้าที่ทรัพยากรมนุษย์)</option>
                <option>Customer Service (พนักงานบริการลูกค้า)</option>
              </select>
              <div class="invalid-feedback">โปรดเลือกตำแหน่งที่ต้องการสมัคร</div>
            </div>

            <div class="row g-3">
              <div class="col-md-3">
                <label for="prefix" class="form-label required">คำนำหน้าชื่อ</label>
                <select id="prefix" name="prefix" class="form-select" required>
                  <option value="">-- กรุณาเลือก --</option>
                  <option>นาย</option>
                  <option>นาง</option>
                  <option>นางสาว</option>
                  <option>ด.ช.</option>
                  <option>ด.ญ.</option>
                </select>
                <div class="invalid-feedback">โปรดเลือกคำนำหน้าชื่อ</div>
              </div>
              <div class="col-md-9">
                <label for="fullname" class="form-label required">ชื่อ-สกุล</label>
                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="เช่น นายสมชาย ใจดี" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
              </div>
            </div>

            <div class="row g-3 mt-1">
              <div class="col-md-6">
                <label for="dob" class="form-label required">วันเดือนปีเกิด</label>
                <input type="date" id="dob" name="dob" class="form-control" max="2030-12-31" required>
                <div class="invalid-feedback">กรุณาระบุวันเดือนปีเกิด</div>
              </div>
              <div class="col-md-6">
                <label for="education" class="form-label required">ระดับการศึกษา</label>
                <select id="education" name="education" class="form-select" required>
                  <option value="">-- เลือกระดับการศึกษา --</option>
                  <option>ม.ปลาย / ปวช.</option>
                  <option>ปวส.</option>
                  <option>ปริญญาตรี</option>
                  <option>ปริญญาโท</option>
                  <option>ปริญญาเอก</option>
                  <option>อื่น ๆ</option>
                </select>
                <div class="invalid-feedback">โปรดเลือกระดับการศึกษา</div>
              </div>
            </div>

            <div class="mb-3 mt-3">
              <label for="skills" class="form-label">ความสามารถพิเศษ</label>
              <textarea id="skills" name="skills" class="form-control" rows="3" placeholder="เช่น พูด/เขียนภาษาอังกฤษได้, เขียนโปรแกรม Python, การออกแบบ UI"></textarea>
              <div class="form-text floating-help">แยกแต่ละความสามารถด้วยเครื่องหมาย comma หรือขึ้นบรรทัดใหม่</div>
            </div>

            <div class="mb-3">
              <label for="experience" class="form-label">ประสบการณ์ทำงาน</label>
              <textarea id="experience" name="experience" class="form-control" rows="4" placeholder="ระบุตำแหน่ง บริษัท ระยะเวลา และหน้าที่รับผิดชอบ"></textarea>
              <div class="form-text floating-help">ตัวอย่าง: Software Engineer — บริษัท ABC (2020–2023): พัฒนาเว็บแอปพลิเคชัน</div>
            </div>

            <div class="row g-3">
              <div class="col-md-6">
                <label for="resume" class="form-label">อัปโหลดประวัติย่อ (ถ้ามี)</label>
                <input class="form-control" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                <div class="form-text">ไฟล์ .pdf .doc .docx ขนาดไม่เกิน 2MB</div>
              </div>
              <div class="col-md-6 align-self-end text-end">
                <small class="text-muted">กรอกข้อมูลครบถ้วนแล้ว ตรวจสอบความถูกต้องก่อนส่ง</small>
              </div>
            </div>

            <div class="d-flex gap-2 justify-content-end mt-4">
              <button type="reset" class="btn btn-outline-secondary">ล้างข้อมูล</button>
              <button type="submit" class="btn btn-primary">ส่งใบสมัคร</button>
            </div>

          </form>

          <div class="mt-4 text-muted small">ติดต่อ: hr@shorizon.co.th • โทร. 02-123-4567</div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Bootstrap form validation (ส่วนนี้จะไม่มีการป้องกันการส่งฟอร์ม)
    (function () {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          // ส่วนนี้อนุญาตให้ฟอร์มส่งข้อมูลไปยัง action="f.php"
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>