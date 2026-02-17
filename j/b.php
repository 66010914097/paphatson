<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปภัสสร อุณวงค์ (BB)</title>
</head>
 
<body>
<h1>ข้อมูลจังหวัด -- ปภัสสร อุณวงค์ (BB)</h1>

<form method="post" action="" enctype="multipart/form-data">
	ชื่อจังหวัด<input type="text" name="pname" autofocus required><br>
    รูปภาพ <input type="file" name="pimage"><br>
    ชื่อภาค 
    <select name="rid">
<?php
    include_once("connectdb.php");
	$sql3 = "SELECT * FROM `regions` ORDER BY r_name DESC";
	$rs3 = mysqli_query($conn,$sql3);
	while($data3 = mysqli_fetch_array($rs3)) {
?> 
		<option value="<?php echo $data3['r_id'];?>"><?php echo $data3['r_name'];?></option>
<?php } ?>
	</select><br><br>    
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>  
     
<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
	$pname = $_POST['pname'];
    $exp = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);
    $rid = $_POST['rid'];
	$sql2 = "INSERT INTO `provinces` VALUES (NULL, '{$pname}','{$exp}','{$rid}')";
	mysqli_query($conn,$sql2) or die ("insert ไม่ได้");
    move_uploaded_file($_FILES['pimage']['tmp_name'],"img/".$pic_id.".".$ext);
}
?>





<table border="1">
	<tr>
    	<th>รหัส</th>
        <th>ชื่อชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>ภาค</th>
    </tr>
  
  <?php
    include_once("connectdb.php");
    $sql = "SELECT * FROM `provinces` AS p
	INNER JOIN `regions` AS r
	ON p.r_id = r.r_id
	ORDER BY p.p_name ASC";
    $rs = mysqli_query($conn,$sql);

    while($data = mysqli_fetch_array($rs)){
?>
    <tr>
    	<td><?php echo $data['p_id'];?></td>
        <td><?php echo $data['p_name'];?></td>
        <td> <img src = "img/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>" 
        width="120"></td>
        <td><?php echo $data['r_name'];?></td>
    </tr>
<?php } ?>
</table>
    
</body>
</html>