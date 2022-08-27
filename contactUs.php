<?php 
session_start();
	include 'connect.php';
	include 'function.php';

	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST)){
		$id=msgIdGenarate();
		$Name=$_POST['name'];
		$Email=$_POST['email'];
		$Phone=$_POST['phn'];
		$messege=$_POST['massege'];
		$date = date('d/m/Y', time());
		
		$query="INSERT INTO messeges(ID, Name, Email, Phone, Messege, Date) VALUES ('$id','$Name','$Email','$Phone','$messege','$date')";
		if(mysqli_query($con,$query)){
			echo "<script>
					alert('Massege Sent to the dev.');
					window.location.href='index.php';</script>";		
		}else{
			echo "<script>
					alert('Cant send massege.');
					window.location.href='index.php';</script>";
		}
		
		//echo "<script>window.location.href='contactUs.php?$date';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>BIPOD</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
       
<!------------------------------>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="css/style.css">
    
	<link rel="stylesheet" href="css/f_style.css">
	<link rel="stylesheet" type="text/css" href="css/contactStyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	
	
	<!----------------------------------------------------->
	
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
     
</head>

<body>
    <header>
    
    </header>
	<!------------------------------------------------------>

	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<form action="" method="POST">
				<div class="right">
					<h2>Contact Us</h2>
					<input type="text" class="field" name="name"  placeholder="Your Name">
					<input type="text" class="field" name="email" placeholder="Your Email">
					<input type="text" class="field" name="phn"   placeholder="Phone">
					<textarea placeholder="Message"  name="massege" class="field"></textarea>
					<button type="submit" class="btn">Send</button>
					<a href="index.php"><button type="button" class="btn mt-3">Cancel</button></a>
				</div>
			</form>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>