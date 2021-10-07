<?php
    include 'connection.php';
    $id= $_GET['id'];
    if(isset($_POST['insert'])){
        $Name=$_POST['name'];
        $Price=$_POST['price'];
        $q ="UPDATE `item` SET `id`=$id,`name`='$Name',`price`='$Price' WHERE id=$id" ;
        $query = mysqli_query($con,$q);
        header('location:add_item.php');
    }
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
    <div class ="col-lg-6 m-auto">
    <form method="post">
     <br><br><div class="card">
     <div class="card-header bg-dark">
     <h1 class="text-white text-center">Update Price</h1></div>
       <br>
        <labal>Name :</labal><br>
        <input type="text" name="name" class="form-control"><br>
        <labal>Price :</labal><br>
        <input type="text" name="price" class="form-control"><br>
        <button class="btn btn-success" type="submit" name="insert">Update</button><br>
    </div>
    </form>
    </div>
    
</body>
</html>