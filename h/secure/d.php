<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ปภัสสร อุณวงค์(BB)</title>
</head>

<body>
<h1>a.php</h1>

<?php
	unset( $_SESSION['name'] );
	unset( $_SESSION['nickname'] );
?>
</body>
</html>