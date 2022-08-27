<?php
  session_start();
  include ("connect.php");
  include ("function.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIPOD</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6df62efed4.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="custom.css">

</head>
<body>
    
    <header>
        <div class="container">
          <!-- nav bar -->
            
          <nav class="navbar navbar-expand-lg bg-white p-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">BIPOD</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active ms-5 me-5" aria-current="page" href="#">Home</a>
                  <a class="nav-link ms-5 me-5" href="#course">Services</a>
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

          <!-- carousel -->

          <div id="carouselExampleControls" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/volunteer.jpg" class="d-block w-100 img-fluid  " alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center">
                  
                  <div class="carousel-text">
                    <p class="py-3 ctextstyle">Join as volunteer</p>
                    <p class="py-3 px-5">
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking at
                      its layout.
                    </p>
                  </div>
                  <div class="start-btn">
                    <button type="button" class="btn btn-primary px-4 py-2">
                      Get Started
                    </button>
                  </div>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/rescue.jpg" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center">
                  
                  <div class="carousel-text">
                    <p class="py-3 ctextstyle">Rescue people from Accidents</p>
                    <p class="py-3 px-5">
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking at
                      its layout.
                    </p>
                  </div>
                  <div class="start-btn">
                    <button type="button" class="btn btn-primary px-4 py-2">
                      Get Started
                    </button>
                  </div>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/help.jpeg" class="d-block w-100 img-fluid " alt="...">
                <div class="carousel-caption d-flex flex-column justify-content-center">
                  
                  <div class="carousel-text">
                    <p class="py-3 ctextstyle">We live for each other</p>
                    <p class="py-3 px-5">
                      It is a long established fact that a reader will be
                      distracted by the readable content of a page when looking at
                      its layout.
                    </p>
                  </div>
                  <div class="start-btn">
                    <button type="button" class="btn btn-primary px-4 py-2">
                      Get Started
                    </button>
                  </div>
                  
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
    </header>
    
    <main  class="container">
      
      <!-- courses section start -->
      <section id="course" class="mt-5 mb-5 sect">
            <p class="h1 text-center my-5 titles">Our Services</p>
            <p class="text-center normal-text">The rescue services we provide</p>
            <div class="container">
                <div class="row">
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/fire.png" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Fire Rescue</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                            <a href='FireReport.php'><button class='btn btn-outline-info' type='submit'>Report</button></a>

                          </div>
                        </div>
                      </div>
                    </div>                    
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/missing.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Missing Reports</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                            <a href='MissingReport.php'><button class='btn btn-outline-info' type='submit'>Report</button></a>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/animal.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Animal Rescue</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                            <a href='AnimalReport.php'><button class='btn btn-outline-info' type='submit'>Report</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/suicide.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Suicidal Attempts</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                            <a href='SuicidalReport.php'><button class='btn btn-outline-info' type='submit'>Report</button></a>
                          </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  
                  
                </div>
                <div class="d-flex justify-content-center my-5">
                  <button type="button" class="btn btn-info text-white justify-content-center">See More Courses</button>
                </div>
          </div>
      </section>
      <!-- courses section end -->
      
      <!-- ready to join start-->
      <section id="register" class="mt-5">
          <div class="bg-info w-100 d-flex flex-lg-row flex-column rounded align-items-center">
            <div class="text-white p-5">
                <h1>Ready to Join?</h1>
                <p class="h3">Join as a volunteer rescuer.</p>
            </div>
            <div class="regbutton mx-auto align-items-center" style="width: 200px;">
              <a href="register.php"><button type="button" class="btn btn-light rounded btn-lg ">Register</button></a>
            </div>
          </div>
      </section>
      <!-- ready to join end-->
      
      <!-- succesful students start -->
      <section id="success" class="mt-5 sect">
        <h1 class="h1 ">Meet Our Successfull <br> Students</h1>
        <p class="">Here are our students who achieved their goal by taking our courses.</p>
        <div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card h-100">
                <img src="images/student/student-1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jon Snow</h5>
                  <p class="card-text">UI/UX designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card h-100">
                <img src="images/student/student-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Elizabeth Murphy</h5>
                  <p class="card-text">Motion designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card h-100">
                <img src="images/student/student-3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tyron Josh</h5>
                  <p class="card-text">Graphics designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card h-100">
                <img src="images/student/student-4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jessica Jones</h5>
                  <p class="card-text">Web developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center my-5">
          <button type="button" class="btn btn-info text-white justify-content-center">View All</button>
        </div>
      </section>
      <!-- succesful students end -->
      
      <!-- Frequently asked questions start -->
      <section class="mt-5">
        <p class="h1 text-center my-5 titles">Frequently Asked Questions</p>
        <p class="text-center normal-text">Here are some questions with answers which has been asked most often</p>
        <div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What is the difference between  <strong> Flex </strong> and <strong> Grid </strong>?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  1.Flex is one dimentional whereas Grid is two dimentional. <br> 2.Grid is layout first on the other hand Flex is content first. <br> 3. Grid can flex combination of items through space-occupying Features. On the Contrary Flex can push content element to extreme alignment.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What is the difference between Tailwind and Bootstrap?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Tailwind:</strong><br>
                    Tailwind offers predesigned widgets to build a site from scratch with fast UI development.
                    <br>
                    <strong>Bootstrap:</strong><br>
                    Bootstrap comes with a set of pre-styled responsive, mobile-first components that possess a definite UI kit.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is CSS boxmodel?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What is semantic tag?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Semantic HTML elements are those that clearly describe their meaning in a human- and machine-readable way. Elements such as header , footer and article are all considered semantic because they accurately describe the purpose of the element and the type of content that is inside them
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Frequently asked questions end -->
      
      <!-- companies tags start  -->
      <section class="mt-5 p-5">
        <p class="h1 text-center my-5 d-lg-block d-none titles">Trusted by people</p>
        
      </section>
      <!-- companies tags end  -->
      
    </main>
    
    <footer class="bg-black mt-5">
        <div class="text-white align-items-center text-center p-5 ">
          <p class="h1">BIPOD</p>
          <p>Office 41, Zawaya Buildin, Ghala Muscat, 
            Sultanate of Oman</p>
            <p>Privacy Ploicy  |   Terms of use</p>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook brand"></i></a> <a href="https://twitter.com/?lang=en"><i class="fa-brands fa-square-twitter brand"></i></a> <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin brand"></i></a>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>