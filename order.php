<?php
session_start();
?>
<?php

include 'connection.php';
if (isset($_POST['submit'])) { 
    $item = mysqli_real_escape_string($con,$_POST['item']);
    $number = mysqli_real_escape_string($con,$_POST['number']);
   $address = mysqli_real_escape_string($con,$_POST['address']);

   $insertquery="INSERT INTO  `order`(item,number,address) VALUES ('$item','$number','$address')";
   $insertq=mysqli_query($con,$insertquery);
   if($insertq){
       ?>
       <script>alert("Oredered successfuly");</script>
       <?php 
    }        
   else
   {
    ?>
    <script>alert("Oredered Failed");</script>
    <?php 
   }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>order</title>
    <?php include "links.php"; ?>
    <?php include "style.php"; ?>

    
</head>
<body>
	<?php include('navbar.php') ?>
	<div class="container">
	<?php
		if(isset($_SESSION['success'])) :
	?>
	<div>
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
	<?php
		endif
	?>
	<?php
		if(isset($_SESSION['email'])) :
	?><?php
    if(!isset($_SESSION['username'])){
        echo "please login first";
        header('location:login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <?php include "style.php"; ?>
    <?php include "links.php"; ?>
</head>
<body>

 
<br>
<br>
<div class="card bg-light" >
<article class="card-body mx-auto" style="max-width:400px;">
<h4 class="card-title mt-3 text-center">Hello <?php echo $_SESSION['username']?></h4>
    <p class="text-center">Select item and place order</p>
  
<form name="orderform" id="orderform" action="<?php  echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">


<div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-utensils"></i></i></span></div>
    <input type="text" name="item" class="form-control" placeholder="Enter name of the product" required>
    </div>

    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-calculator"></i></span></div>
    <input type="number" name="number" class="form-control" placeholder="Quantity" required>
    </div>

    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-home"></i></span></div>
    <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
    </div>


    <div class="form-group input-group">

    <button type="submit" name="submit" class="btn btn-block btn-primary">Place Order</button>
</div>
    </form>
  </article>
</div>
</form>





<a href="logout.php" class="btn btn-block btn-primary">LOGOUT</a>
</body>
</html>

<?php endif;
	$msg="";
	if(!isset($_SESSION['email'])){
		$msg="**You must login first!**<br><br> **Register yourself or login if already registered**";
	}
?>
<h4 style="color:red; text-align: center; margin-top: 20px;"><?php echo $msg ?></h4>
	</div>
</body>
</html>