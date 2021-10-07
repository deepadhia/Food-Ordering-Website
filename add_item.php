<?php
       include 'connection.php';
       $q = "select * from item";
       $query = mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'navbar.php';
        include 'links.php';
        include 'style.php';
    ?>
        <div class="container">
    <div class ="col-lg-12"><br>
    <h1 class="text-center text-warning">Display Price table</h1><br>
    <table class="table table-striped table-hover table-bordered ">
        <tr class="bg-dark text-white text-center">
        <th>ID</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Delete</th>
        <th>Update</th>
        </tr>

        <?php

            include 'connection.php';
            $q = "select * from item";
            $query = mysqli_query($con,$q);

            while($res = mysqli_fetch_array($query)){
        ?>
        <tr class="text-center">
        <td><?php echo $res['id'] ?> </td>
        <td><?php echo $res['name'] ?> </td>
        <td><?php echo $res['price'] ?> </td>
        <td><button class="btn btn-danger text-white"><a href="delete.php? id=<?php echo $res['id'];?>" class="text-white">DELETE</a></button></td>
        <td><button class="btn btn-success text-white"><a href="update.php? id=<?php echo $res['id'];?>" class="text-white">UPDATE</a></button></td>
        </tr>
        <?php
            }   
        ?>
    </table>
    </div>
    </div>
</body>
</html>