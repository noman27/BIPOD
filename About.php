<?php
session_start();
	include 'connect.php';
	include 'function.php';

	//$det=aboutget($con);
	$head='Bipod is an emergency management system aimed at developing Bangladeshi information services based on people reports and satellite earth observation. Bipod is an user driven programme and the information services provided will be freely and openly accessible to its Users. Bipod protects communities by coordinating and integrating all activities necessary to build, sustain, and improve the capability to mitigate against, prepare for, respond to, and recover from threatened or actual natural disasters, acts of terrorism, or other man-made disasters. 
	';
	
	//$strat=$det['strat'];
	//$mission=$det['mission'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>BIPOD</title>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
       
<!------------------------------>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
	<link rel="stylesheet" type="text/css" href="css/aboutStyle.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    

     
</head>

<body>
    <header>
    
    </header>

    <!----------------------------------test------------------------------------>

	<div class="third">
		<div class="container">			
			<div class="text-center d-block">
				<h1 class="fw-bold mb-5">About Us</h1>
				<?php echo "<p class='fs-4'>$head</p>" ?>
				<div class="mt-5">
				<a href="index.php"><button type="button" class="btn btn-outline-secondary">Go to Home</button></a>
				</div>
			</div>	
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>