<?php
session_start();
?>
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
   
   
    $query="select * from sign where email='$email' ";
    $q=mysqli_query($con,$query);
    
    $email_count=mysqli_num_rows($q);
    
    if($email_count===0){
        ?>
        <script>alert("Email not exist");</script>
        <?php
    }
    else{
        $email_pass=mysqli_fetch_assoc($q);
        $_SESSION['username']=$email_pass['username'];
        $db_pass=$email_pass['password'];
        $pass_decode=password_verify($password,$db_pass);

        if($pass_decode){
                ?>
                  
                    <script>alert("Login successfuly");</script>
                  
                <?php  
                 header('location:index.php');
                 $_SESSION['email']=$email;
                 $_SESSION['success']="You are logged in now"
                  ?>  <script>alert("You are logged in now");</script> <php?;
                  
        }
        else{
            ?>
            <script>alert("Incorrect Password");</script>
            <?php
        }
        } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include "links.php"; ?>
    <?php include "style.php"; ?>
    
</head>
<body>
    
    <?php
    include 'navbar1.php';
    ?>
    <div class="container-fluid">
    <div class="card bg-light">
 
    <article class="card-body mx-auto" style="max-width:400px;">
    <h4 class="card-title mt-3 text-center">Login</h4>
    <p class="text-center">Not have an account? <a href="sign.php">SignUp Here.</a></p>
   <p>
        <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>   Login with Gmail</a>
        <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>   Login with Facebook</a>
    </p>
    <p class="divider-text">
    <span class="bg-light text-center">OR</span>    
    </p>
    <form name="sign-in" action="<?php  echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
    <input type="email" name="email" class="form-control" placeholder="Email address" required>
    </div>
    
    
    <div class="form-group input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
    </div>

    
    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
    <p class="text-center">Forget Password? <a href="update.php">Click Here.</a></p>
    </div>

    </form>
    </article>
    </div>
    </div>
    <?php include "footer.php"; ?>    
</body>
</html>