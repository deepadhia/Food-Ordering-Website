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
    
    <?php include "style.php"; ?>
    <?php include "links.php"; ?>

</head>
<body>
<?php include "navbar.php"; ?>
    <div class="container">
    <div class ="col-lg-12"><br>
    <h1 class="text-center text-warning">Price table</h1><br>
    <table class="table table-striped table-hover table-bordered ">
        <tr class="bg-dark text-white text-center">
        <th>ID</th>
        <th>Item Name</th>
        <th>Price </th>
        </tr>

        <?php

            include 'connection.php';
            $q = "select * from item";
            $query = mysqli_query($con,$q);
            $a=0;
            while($res = mysqli_fetch_array($query)){
                $a+=1;
        ?>
        <tr class="text-center">
        <td><?php echo $a ?> </td>
        <td><?php echo $res['name'] ?> </td>
        <td><?php echo $res['price'] ?> </td>
        </tr>
        <?php
            }   
        ?>
    </table>
    </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>