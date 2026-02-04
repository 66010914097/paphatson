<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "4097db";
$conn = mysqli_connect($host,$user,$ped,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn,"SET NAMES utf8");
?>