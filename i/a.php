<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปภัสสร อุณวงค์ (BB)</title>
</head>

<body>
<h1>งาน i</h1>
<h1>ปภัสสร อุณวงค์ (BB)</h1>
 <?php
    include_once("connectdb.php");
    $sql = "SELECT * FROM `regions` ORDER BY r_name ASC";
    $rs = mysqli_query($conn,$sql);

    while($data = myaqli_fetch_array($rs)){
        echo $data['r_id']."". $data['r_name']. "<br>";
    }

?>

</body>
</html>