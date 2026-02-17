<?php include_once("connectdb.php"); ?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>จัดการข้อมูลจังหวัด</title>
</head>
<body>
<h1>ข้อมูลจังหวัด -- ปภัสสร อุณวงค์ (BB)</h1>

<form method="post" action="" enctype="multipart/form-data">
ชื่อจังหวัด: <input type="text" name="pname" autofocus required> <br>

รูปภาพ: <input type="file" name="pimage" required> <br>
 
ชื่อภาค:
<select name="rid">
<?php
$sql3 = "SELECT * FROM `regions` ORDER BY r_name ASC";
$rs3 = mysqli_query($conn, $sql3);
while($data3 = mysqli_fetch_array($rs3)){
echo "<option value='".$data3['r_id']."'>".$data3['r_name']."</option>";
}
?>
</select>
<br><br>
<button type="submit" name="Submit">บันทึก</button>
</form>
<br>

<?php
if(isset($_POST['Submit'])){
$pname = $_POST['pname'];
$rid = $_POST['rid'];

// จัดการเรื่องนามสกุลไฟล์รูปภาพ
$file_name = $_FILES['pimage']['name'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);

// 1. บันทึกข้อมูลลงฐานข้อมูลก่อนเพื่อเอา ID มาเป็นชื่อไฟล์
$sql_add = "INSERT INTO `provinces` (p_name, r_id, p_ext) VALUES ('$pname', '$rid', '$ext')";
mysqli_query($conn, $sql_add) or die("บันทึกข้อมูลไม่ได้");

// 2. อัปโหลดไฟล์รูปภาพไปยังโฟลเดอร์ images
$last_id = mysqli_insert_id($conn);
$target_file = "img/" . $last_id . "." . $ext;
move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);

echo "<script>window.location.href='b.php';</script>";
}
?>

<table border="1">
<tr>
<th>รหัส</th>
<th>จังหวัด</th>
<th>รูปภาพ</th>
<th>ภาค</th>
</tr>
<?php
$sql = "SELECT * FROM `provinces` AS p
INNER JOIN `regions` AS r ON p.r_id = r.r_id
ORDER BY p.p_id DESC";
$rs = mysqli_query($conn, $sql);

while($data = mysqli_fetch_array($rs)){
?>
<tr>
<td><?php echo $data['p_id']; ?></td>
<td><?php echo $data['p_name']; ?></td>
<td align="center">
<img src="img/<?php echo $data['p_id'] . "." . $data['p_ext']; ?>" width="100">
</td>
<td><?php echo $data['r_name']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
