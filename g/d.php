<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายงานยอดขาย - ปภัสสร อุณวงค์ (BB)</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Kanit', sans-serif; 
            background-color: #f8f9fa; 
            padding: 30px 0; 
        }
        .card { 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
            transition: transform 0.3s;
        }
        .chart-container { 
            position: relative; 
            height: 350px; 
            width: 100%; 
        }
        .table thead th { 
            background-color: #f1f3f9; 
            color: #334155; 
            border: none;
            padding: 15px;
            font-weight: 500;
        }
        .table tbody td { 
            padding: 15px; 
            vertical-align: middle; 
            border-bottom: 1px solid #f1f3f9;
        }
        .color-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
        }
        .gradient-text {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold gradient-text">Dashboard สรุปยอดขายตามประเทศ</h1>
        <p class="text-muted">ผู้จัดทำ: ปภัสสร อุณวงค์ (BB) | ข้อมูลอัปเดตล่าสุด</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-4"><i class="fa-solid fa-list-ol me-2 text-primary"></i>รายละเอียดรายประเทศ</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ประเทศ</th>
                                <th class="text-end">ยอดขาย (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once("connectdb.php");
                                $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC;";
                                $rs = mysqli_query($conn, $sql);
                                
                                $countries = [];
                                $totals = [];
                                $index = 0;

                                while ($data = mysqli_fetch_array($rs)){
                                    $countries[] = $data['p_country'];
                                    $totals[] = $data['total'];
                            ?>
                            <tr>
                                <td>
                                    <span class="color-dot" id="dot-<?php echo $index; ?>"></span>
                                    <?php echo $data['p_country'];?>
                                </td>
                                <td align="right" class="fw-bold text-dark">
                                    <?php echo number_format($data['total'], 0);?>
                                </td>
                            </tr>
                            <?php 
                                    $index++;
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="row g-4">
                <div class="col-12">
                    <div class="card p-4">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-chart-column me-2 text-success"></i>กราฟแท่งเปรียบเทียบยอดขาย</h5>
                        <div class="chart-container">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-4">
                        <h5 class="fw-bold mb-3"><i class="fa-solid fa-chart-pie me-2 text-info"></i>สัดส่วนยอดขายรวม</h5>
                        <div class="chart-container">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<script>
    // 1. เตรียมข้อมูลจาก PHP
    const labels = <?php echo json_encode($countries); ?>;
    const dataValues = <?php echo json_encode($totals); ?>;

    // 2. ฟังก์ชันสร้างชุดสีที่สวยงามและไม่ซ้ำกัน (Dynamic Color Generation)
    function generateColors(count) {
        const colors = [];
        for (let i = 0; i < count; i++) {
            // ใช้ค่า HSL เพื่อให้สีสดใสและกระจายตัวทั่ววงล้อสี (360 องศา)
            const hue = (i * (360 / count)) % 360;
            colors.push(`hsla(${hue}, 70%, 60%, 0.8)`);
        }
        return colors;
    }

    const dynamicColors = generateColors(labels.length);
    const borderColors = dynamicColors.map(c => c.replace('0.8', '1'));

    // 3. เติมสีให้จุดในตาราง (Color Dot) เพื่อให้ตรงกับกราฟ
    labels.forEach((_, index) => {
        const dot = document.getElementById(`dot-${index}`);
        if(dot) dot.style.backgroundColor = dynamicColors[index];
    });

    // --- การสร้าง Bar Chart ---
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย (บาท)',
                data: dataValues,
                backgroundColor: dynamicColors,
                borderColor: borderColors,
                borderWidth: 1,
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { 
                    beginAtZero: true,
                    grid: { display: false }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    // --- การสร้าง Pie Chart ---
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: dynamicColors,
                borderColor: '#ffffff',
                borderWidth: 2,
                hoverOffset: 20
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { 
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                }
            }
        }
    });
</script>

</body>
</html>