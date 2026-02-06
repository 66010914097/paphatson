<?php
    session_start();
    unset($_SESSION['ID']);
    unset($_SESSION['aname']);
    echo"<script>";
    echo"window.location='index.php';";
    echo"</script>";
?>
