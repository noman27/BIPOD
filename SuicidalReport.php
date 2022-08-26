<?php 
    include ("connect.php");
    include ("function.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $area=$_POST['inci-area'];
        $Repo_contact=$_POST['reporter-cont'];
        $address=$_POST['address'];
        $type = 'Suicide';
        $today = date("F j, Y, g:i a");
        $id= reportIDGenarate();


        if(!empty($area)  && !empty($Repo_contact) && !empty($address)){
            reportSubmit($con,$id,$area,$Repo_contact,$address,$type,$today,'Ongoing');
        }
        else{
            echo "<script>
                    alert('Some fields are empty.');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Suicidal Attept</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body>
    <header class="container">
        <h2 class="text-center m-5">Report Suicide Attempts</h2>
    </header>
    <main class="container">
        <form action="" method="POST">
        
            <div class="form-group">
                <label for="Incident-Area">Area:</label>
                <input type="text" class="form-control" id="Incident-Area" name="inci-area" placeholder="Area name">
            </div>
            <div class="form-group mt-5">
                <label for="Reporter-number">Reporter Contact:</label>
                <input type="text" class="form-control" id="Reporter-number" name="reporter-cont" placeholder="Contact Number of Reporter">
            </div>
            <div class="form-group mt-5">
                <label for="Incident-address">Incident Address:</label>
                <textarea class="form-control" id="Incident-address" name="address" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Report</button>
        </form>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>