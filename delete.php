<?php

    include 'connection.php';
    $id = $_GET['id'];
    $q =" DELETE FROM `item` WHERE `id`=$id";
    mysqli_query($con, $q);
    header('location:add_item.php');  
?>
