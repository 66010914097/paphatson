<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปภัสสร อุณวงค์(BB)</title>
</head>

<body>
<h1>ปภัสสร อุณวงค์(BB)</h1>

<form method="post" action="">
กรอกตัวเลขคะแนน<input type="number" name="a" min="0" max="100" autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
	$score = $_POST['a'];
	if ($score >= 80) {
		$grade = "A ดีเลิศ" ;
	} else if ($score >= 70) {
		$grade = "B ดีมาก" ;
	} else if ($score >= 60) {
		$grade = "C ดี" ;
	} else if ($score >= 50) {
		$grade = "D พอใช้" ;
	} else {
		$grade = "F ลาออกไปซะ" ;
	}
echo "<h3>คะแนน $score ได้เกรด $grade</h3>" ;
}
?>
</body>
</html>