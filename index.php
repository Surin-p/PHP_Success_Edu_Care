<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      overflow-X: hidden;
    }

    nav {
      height: 100px;
    }

    .red-card {
      background-color: #F9EBEA;
      overflow: hidden;
      cursor: pointer;
      transition: 0.2s;
      color: red;
      box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
      margin-bottom: 30px;
      border-radius: 10px;
      border: none;

    }

    .green-card {
      background-color: #D4EFDF;
      color: #66BB6A;
      box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.2);
      border: none;
      border-radius: 10px;

    }



    .red-card:hover {
      transform: translateY(-0.5%);
      box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
    }

    .btn {
      transition: 0.2s;
    }

    .btn:hover {
      transform: translateY(-5.5%);
      box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
    }

    .border-top-only {
      border-top: 0.5rem solid green;
      width: 105px;
    }

    .abroad-study {
      margin-top: 80px;
      padding-top: 20px;
    }

    .carousel-inner {
      padding: 1em;
      margin-left: 5%;
    }

    @media screen and (min-width:576px) {
      .carousel-inner {
        display: flex;
      }

      .carousel-item {
        display: block;
        margin-right: 0;


      }
    }


    .card {
      margin: 0 .5em;

    }

    .image-wrapper {
      max-width: 100%;

    }

    img {
      max-width: 100%;
      max-height: 100%;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
      <a class="navbar-brand" href="javascript:void(0)"><img src="image/ss4.png" alt="" width="120px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon text-muted"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto text-muted">
          <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)"><b>Study Aboard</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)"><b>Courses</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)"><b>Our Branch</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="javascript:void(0)"><b>Gallery</b></a>
          </li>
          <li class="nav-item mx-auto">
            <a class="nav-link text-muted float-right" href="javascript:void(0)"><b>About Us</b></a>
          </li>
        </ul>
        <form class="d-flex">

          <button class="btn btn-danger p-2" type="button">Call Now</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Carousel -->
  <img src="image/AUS.jpg" width="100%" alt="">
  <hr class="border-top-only">
  </hr>
  <br>
  <!--
    ##############################################
    Study Aboard
    ################################################
-->

  <div class="row">
    <div class="col-lg-4  text-center">

      <h2 class="text-muted abroad-study">STUDY ABROAD </h2>
      <p class="text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
    </div>
    <div id="carouselExampleControls" class="col-lg-8 carousel green-card" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card red-card mx-2 mt-5" style="width:400px">
            <div class="image-wrapper"> <img src="image/AUS.jpg" alt="Card image" style="width:100%;">
            </div>
            <div class="card-body">
              <h4 class="card-title">AUSTRALIA</h4>
              <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
              <a href="#" class="btn btn-danger">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card red-card mx-2 mt-5" style="width:400px">
            <img src="image/uk.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h4 class="card-title">United Kingdom(UK)</h4>
              <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
              <a href="#" class="btn btn-danger">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card red-card mx-2 mt-5" style="width:400px">
            <img src="image/DEN.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h4 class="card-title">Denmark</h4>
              <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
              <a href="#" class="btn btn-danger">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="card red-card mx-2 mt-5" style="width:400px">
            <img src="image/uk.jpg" alt="Card image" style="width:100%;">
            <div class="card-body">
              <h4 class="card-title">United Kingdom(UK)</h4>
              <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
              <a href="#" class="btn btn-danger">Read More</a>
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
  <!--
    ##############################################
    Study aboard
    ################################################
-->


  <!--     
<div class="container">
    <div class="row">
        <div class="card col-lg-4 col-md-6 mx-5 mt-5 red-card " style="width:350px; height:350px">
            <div>
                <p class="mb-0 text-success"><b>With Success</b></p>
                <h2 class="card-title mb-5 text-muted">Best Consultancy</h2>
                <h6 class="card-subtitle mb-5 text-muted">We have a team of highly dedicated individuals for the best service delivery.</h6>
                <p class="card-text">
                    <span class="badge bg-danger">Recommendations</span> 
                    <span class="badge bg-danger">Advice</span>
                    <span class="badge bg-danger">Selection of universities</span>
                    <span class="badge bg-danger">Best courses</span>
                </p>
                
        
            </div>
          
    
        </div>
        <div class="card col-lg-4 col-md-6 mx-5 mt-5 red-card" style="width:350px ; height:350px">
            <div>
                <p class="mb-0 text-success"><b>With Success</b></p>
                <h2 class="card-title mb-5 text-muted">Best Consultancy</h2>
                <h6 class="card-subtitle mb-5 text-muted">We have a team of highly dedicated individuals for the best service delivery.</h6>
                <p class="card-text">
                    <span class="badge bg-danger">Recommendations</span> 
                    <span class="badge bg-danger">Advice</span>
                    <span class="badge bg-danger">Selection of universities</span>
                    <span class="badge bg-danger">Best courses</span>
                </p>
                
        
            </div>
          
    
        </div>
    </div>
    

</div> -->

  <!--
    ##############################################
    ABOUT US
    ################################################
-->
  <div class="container mt-3">
    <hr class="border-top-only">
    <h2 class="text-muted">About Us</h2>
    </hr>
    <div class="mt-4 p-5 green-card">
      <div class=row>
        <div class="col-lg-6">
          <h5 class="pb-0">Welcome to</h5>
          <h2>Success Education Pvt. Ltd</h2>

          <p class="text-muted">Success EduCare Pvt. Ltd. (SEC) is one of Nepal’s up-rising education consultancies. Our goal is to support every learner, every learning professional, education institutes and recruitment organizations through our work.

            Incorporated in 2019, SEC has tried to dispel the myths associated with abroad studies by simplifying the procedures through technology resourcing and knowledge consulting with institutions and agencies alike. Till date many students have successfully gone to different countries through our consulting.
          </p>
          <a href="#" class="btn btn-success">Read More</a>
        </div>
        <div class="col-lg-6 mt-2"><img src="image/SUCCESS FR(2).jpg" alt=""></div>
      </div>
    </div>

    <br>
    <!--
    ##############################################
        END ABOUT USE
    ################################################
-->



    <!--
    ##############################################
        OUR FEATURES
    ################################################
-->

    <div class="container mt-3">

      <div class="mt-4 p-5 green-card">
        <div class=row>
          <div class="col-lg-6"><img src="image/feature.jpg" alt=""></div>
          <div class="col-lg-6">
            <hr class="border-top-only">
            <h5 class="pb-0">Our features</h5>
            </hr>
            <h2><b>Why choose us among others? We are the Best.</b></h2>
            <h1>Expert Team</h1>
            <p class="text-muted">
              We are team of passionate & devoted human resources with enthusiasm for providing excellent services & meet every requirement of students seeking to study abroad. We are using all the resources available in and outside the country to achieve the goal of providing better opportunities for our Nepalese students.
            </p>
            <h1>Best Consulting Agency</h1>
            <p class="text-muted">
              It's difficult to select the right college or university for any student. Our internationally certified counsellors provide all the necessary information about colleges and universities. We also make you understand about the lengthy processing system of visa application in various embassies. Our counsellors assist prospective students in obtaining the necessary documents prior to applying for admissions in a foreign university/college. They then counsel students into putting together the best case presentation possible to obtain a student visa to the prospective destination.
            </p>
            <h1>A-Grade Education</h1>
            <p class="text-muted">
              SEC counselors are well trained and certified to provide all necessary information regarding colleges and universities.
            </p>


          </div>

        </div>
      </div>
    </div>

    <!--
    ##############################################
        END OF OUR FEATURES
    ################################################
-->



    <!--
    ##############################################
    COURSES
    ################################################
-->
    <div class="container mt-3">
      <hr class="border-top-only">
      <h2 class="text-muted">COURSES</h2>
      </hr>
      <div class="row">
        <div class="card red-card col-lg-4 mx-2 mt-5" style="width:400px">
          <img class="card-img-top mt-5" src="image/Ielts.jpeg" alt="Card image" style="width:100%;">
          <div class="card-body">
            <h4 class="card-title">English Proficency Classess</h4>
            <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>


        <div class="card red-card col-lg-4 mx-2 mt-5" style="width:400px">
          <img class="card-img-top mt-5" src="image/Ielts.jpeg" alt="Card image" style="width:100%;">
          <div class="card-body">
            <h4 class="card-title">ILETS</h4>
            <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>

        <div class="card red-card col-lg-4 mx-2 mt-5" style="width:400px">

          <img class="card-img-top mt-5" src="image/PTE.jpg" alt="Card image" style="width:100%">

          <div class="card-body">
            <h4 class="card-title">PTE</h4>
            <p class="card-text text-muted">The Pearson Test of English (PTE Academic) assesses the Speaking & Writing, Reading and Listening skills...</p>
            <a href="#" class="btn btn-danger">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <!--
    ##############################################
    END COURSES
    ################################################

    -->


    <!--
    ##############################################
    TESTOMONIAL
    ################################################
-->

    <!-- <div class="container mt-3 ">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mt-4 p-5 green-card">
              <div class="col-6 col-md-4">
                <img src="image/male.jpg" class="rounded-circle" width="150px" alt="Cinque Terre">
              </div>

              <div class="col-md-8">
                <h1>Dibash Khadka</h1>
                <h2>ILETS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mt-4 p-5 green-card">
              <div class="col-6 col-md-4">
                <img src="image/male.jpg" class="rounded-circle" width="150px" alt="Cinque Terre">
              </div>

              <div class="col-md-8">
                <h1>Khadka</h1>
                <h2>ILETS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mt-4 p-5 green-card">
              <div class="col-6 col-md-4">
                <img src="image/male.jpg" class="rounded-circle" width="150px" alt="Cinque Terre">
              </div>

              <div class="col-md-8">
                <h1>Dibash</h1>
                <h2>ILETS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row mt-4 p-5 green-card">
              <div class="col-6 col-md-4">
                <img src="image/male.jpg" class="rounded-circle" width="150px" alt="Cinque Terre">
              </div>

              <div class="col-md-8">
                <h1>Dibash</h1>
                <h2>ILETS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> -->
    <br>

    <!--
    ##############################################
    END TESTOMONIAL
    ################################################

    -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="index.js"></script>

</body>

</html>