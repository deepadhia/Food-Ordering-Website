<?php
session_start();
session_destroy();
echo "please login first";
header('location:login.php');
?>
