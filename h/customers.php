<?php
    include_once("check_login.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการลูกค้า</title>
</head>

<body>
<h1>จัดการลูกค้า<h1>
<?php echo $_SESSION['aname'];?>
<ul>
    <a href ="index2.php"><li>หน้าหลักแอดมิน</li></a>
    <a href ="products.php"><li>จัดการสินค้า</li></a>
    <a href ="orders.php"><li>จัดการออเดอร์</li></a>
    <a href ="customers.php"><li>จัดการลูกค้า</li></a>
    <a href ="logout.php"><li>ออกจากระบบ</li></a>
</ul>

</body>
</html>