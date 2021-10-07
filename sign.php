<?php
session_start();
?>
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    
    $username =  mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);   

    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

    $query="select * from sign  where email='$email' ";
    $q=mysqli_query($con,$query);
    $count=mysqli_num_rows($q);
    
    if($count>0){
        ?>
        <script>alert("Email alredy exist");</script>
        <?php
    }
    else{

        if($password===$cpassword){
            $insertquery="INSERT INTO  sign( username, email, mobile, password,cpassword) VALUES ('$username','$email','$mobile','$pass','$cpass')";
            $insertq=mysqli_query($con,$insertquery);
            if($insertq){
                ?>
                <script>alert("Sign successfuly");</script>
                <?php
            }        
        }
        else{
            ?>
            <script>alert("Password are not matching");</script>
            <?php
            
        }
        }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <?php include "style.php"; ?>
    <?php include "links.php"; ?>
</head>
<body>
    
    <?php
    include 'navbar1.php';
    ?>
    <div class="container-fluid">
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Getting started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>   Login via Gmail</a>
        <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>   Login via Facebook</a>
    </p>
    <p class="divider-text">
    <span class="bg-light text-center">OR</span>    
    </p>
    <form name="sign-in" action="<?php  echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
    <input type="text" name="username" class="form-control" placeholder="Full name" required>

    </div>
    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
    <input type="email" name="email" class="form-control" placeholder="Email address" required>
    </div>
    

    
    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
    <input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
    </div>

    
    <div class="form-group input-group">    
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
    <input type="password" name="password" class="form-control" placeholder="Create Password" required>
    </div>

    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
    <input type="password" name="cpassword" class="form-control" placeholder="Repeat Password" required>
    </div>

    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
    <p class="text-center">Have an account <a href="login.php">Log In</a></p>
    </div>

    </form>
    </article>
    </div>
    </div>

    <?php include "footer.php"; ?>    
</body>
</html>