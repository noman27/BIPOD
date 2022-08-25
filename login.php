<?php
    
    include ("connect.php");
    include ("function.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user=$_POST['Email'];
        $pwd=$_POST['Password'];

        if(!empty($user)  && !empty($pwd)){
            loginUser($con,$user,$pwd);

        }
        else{

        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    
    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet" type="text/css" href = "css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
    <div class="container">
        <p class="login-text">Login with Social Media</p>
        <div class="login-social">
            <a href="" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="" class="google"><i class="fab fa-google-plus"></i> Google</a>
            <a href="" class="linkedin"><i class="fab fa-linkedin"></i> Linked-In</a>
        </div>
        <form class="login-email" method="POST">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="Password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
        <div class="input-group">
               <a href="index.php"><button class="btn">Home</button></a> 
        </div>   
    </div>
</body>
</html>