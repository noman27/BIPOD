<?php
    session_start();
    include 'connect.php';
    include 'function.php';

    $html = 'FireList.php';
    $status= 'Ongoing';
    if(isset($_SESSION['UserID'])){
      $area = $_SESSION['Area'];
      $rs=allReporttGet($con,$area);

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['ID'];
        $status = $_POST['stats'];
        $sql = "UPDATE reports SET Status='$status' WHERE ID ='$id' ";
        if(mysqli_query($con,$sql)){
          echo "<script>
          alert('Status Updated');
          window.location.href='FireList.php';</script>";
        }else{
          echo "<script>
          alert('Error Status Not Updated');
          window.location.href='FireList.php';</script>";
        }
      }

    }else{
      $rs=allReportstGet($con,$status);
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accident List</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-white p-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">BIPOD</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active ms-5 me-5" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link ms-5 me-5" href="index.php">Services</a>
                  <a class="nav-link ms-5 me-5" href="#">EMSInfo</a>
                  <a class="nav-link ms-5 me-5" href="contactUs.php">Contact</a>
                  <a class="nav-link ms-5 me-5" href="About.php">About</a>
                  <a class="nav-link ms-5 me-5" href="register.php">Register</a>
                  <?php 
                    if(isset($_SESSION['UserID'])){
                      echo "<a href='logout.php'><button class='btn btn-outline-info ms-5 me-5' type='submit'>LogOut</button></a>";
                    }else{
                      echo "<a href='login.php'><button class='btn btn-outline-info ms-5 me-5' type='submit'>LogIn</button></a>";
                    }

                  ?>
                  <!-- <button class="btn btn-outline-info ms-5 me-5" type="submit">LogIn</button> -->
                </div>
              </div>
            </div>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container mb-5 mt-5 d-block">
              <?php
              if(isset($_SESSION['UserID'])){
                echo "<h5>Update Incident status:</h5>
                <form method='POST'>
                  <input type='text' placeholder='Incident ID' name='ID' required>
                  <button type='submit' class='btn btn-success' name='stats' value='Resolved'>Resolved</button>
                </form>";
              }
              ?>
              
        </div>
        <div class="container">
            <div class="mt-5 mb-5">
                <h1 class="text-center">Incident Reports</h1>
            </div>
            <div class="mt-5">
                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Area</th>
                            <th scope="col">Address</th>
                            <th scope="col">Reporter Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            
                        </tr>
                    </thead>
                    <?php
                    while($row=mysqli_fetch_assoc($rs)){
                        echo  
                        "<tr>
                        <th scope='row'>$row[ID]</th>
                        <td>$row[Area]</td>
                        <td>$row[Addres]</td>
                        <td>$row[ReporterNumber]</td>
                        <td>$row[Date]</td>
                        <td>$row[Type]</td>
                        <td>$row[Status]</td>
                        
                        </tr>";
                    }
                    ?>
                    

                </table>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>