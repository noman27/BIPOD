<?php
    
session_start();
    
include ("connect.php");
include ("function.php");

    //error_reporting(0);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //print_r($_POST);
        $fullName   = $_POST['fullName'];
        $area   = $_POST['area'];
        $uEmail     = $_POST['userEmail'];
        $password   = md5($_POST['userPass']);
        $cpassword  = md5($_POST['finalPass']) ;
        $phone = $_POST['phone'];

        if(!empty($fullName)  && !empty($uEmail) && !empty($password) && !empty($cpassword) && !empty($phone)){
            if($password==$cpassword){
                //echo "Noice";
                if(uidExists($con,$phone,$uEmail)==false){    
                    $ID=IdGenarate();
                    $prID=profIdGenarate();
                    
                    //INSERT INTO user(ID, Name, Email, Phone, Password) VALUES ('$ID','$fullName','$uEmail',[value-4],'$cpassword')

                    $query="INSERT INTO user(ID, Name, Email, Phone, Password,Area) VALUES ('$ID','$fullName','$uEmail','$phone','$cpassword','$area') ";
                    //$query2="INSERT INTO profile(ProfileID, UserID, Bio, ProfPicLink) VALUES ('$prID','$ID','Add Bio','Add profile')";
                    //$query3="INSERT INTO userlinks(LinkID, UserID, Link) VALUES ('$LinkID','$ID','Add your contact links')";

                    if(mysqli_query($con,$query)){
                        echo "<script>
                        alert('You are all set.');
                        window.location.href='index.php';</script>";
                    }else{
                        echo "<script>
                        alert('Cant create user something went wrong');
                        window.location.href='register.php?error';</script>";
                    }//mysqli_query($con,$query2);
                    //mysqli_query($con,$query3);

                    //echo "<script>window.location.href='login.php';</script>";

                    
                    //echo '<div> <div id="liveAlertPlaceholder"></div> <div>';

                    //die;
                }
                else{
                    echo "<script>window.location.href='register.php?user-already-exists';</script>";
                }
            }
            else{
                echo "<script>
                        alert('Cant create user something went wrong')<script>;";
            }
        }
        else{
            echo "<script>
                        alert('Cant create user something went wrong')<script>;";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <link rel = "icon" type = "images/png" href = "images/logo_icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet"  type="text/css"  href="css/registerStyle.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="fullName" required>
                </div>
                <div class="input-box">
                    <span class="details">Area</span>
                    <input type="text" placeholder="Area you live in" name="area" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="userEmail" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone</span>
                    <input type="text" placeholder="Your Phone no" name="phone" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Password"  name="userPass" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" name="finalPass" required>
                </div>
            </div>
            <div class="regbtn">
                <input type="submit" value="Register" id="signup">
            </div>
        </form>
        <div class="regbtn">
            <a href="index.php"><input type="submit" value="GO TO HOME PAGE"></a>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>