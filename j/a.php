<?php include_once("connectdb.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ข้อมูลภาค</title>
</head>
<body>
<h1>ข้อมูลภาค -- ปภัสสร อุณวงค์ (BB)</h1>

<form method="post" action="">
ชื่อภาค: <input type="text" name="rname" autofocus required>
<button type="submit" name="Submit">บันทึก</button>
</form>
<br>

<?php
if(isset($_POST['Submit'])){
$rname = $_POST['rname']; // รับค่าจาก name="rname"
$sql2 = "INSERT INTO `regions` (r_name) VALUES ('$rname')";
$result = mysqli_query($conn, $sql2) or die("insert ไม่ได้");
echo "<script>window.location.href='a.php';</script>"; // รีเฟรชหน้าเพื่อให้ข้อมูลใหม่ขึ้นทันที
}
?> 
  
<table border="1">
<tr>
<th>รหัสภาค</th>
<th>ชื่อภาค</th>
</tr>
<?php
// ต้องประกาศ $rs ก่อนใช้ใน while
$sql = "SELECT * FROM `regions` ORDER BY r_id DESC";
$rs = mysqli_query($conn, $sql);

while($data = mysqli_fetch_array($rs)) {
?>
<tr>
<td><?php echo $data['r_id']; ?></td>
<td><?php echo $data['r_name']; ?></td>
<td width="50" align="center"><a href="delete_region.php?id=<?php echo $data['r_id'];?>" onClick="return confirm('ยืนยันการลบ?');"><img src="img/3.jpg" width="20"></a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
