<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
   
        .red-card{
            background-color:#F9EBEA;
            overflow: hidden;
            cursor:pointer;
            transition:0.2s;
            color:red;
            box-shadow: 0 4rem 8rem rgba(0,0,0,0.2);
            margin-bottom:30px;
            border-radius:10px;
            border: none;
            
        }

        .green-card{
            background-color:#D4EFDF;
            color: #66BB6A;
            box-shadow: 0 4rem 8rem rgba(0,0,0,0.2);
            border: none;
            border-radius:10px;              
        }

        .card{
            
        }

        .red-card:hover{
            transform: translateY(-0.5%);
            box-shadow: 0 4rem 8rem rgba(0,0,0,0.5);
        }
        .btn{
            transition:0.2s;
        }
        .btn:hover{
            transform:translateY(-5.5%);
            box-shadow: 0 4rem 8rem rgba(0,0,0,0.5);
        }
        .border-top-only{
          border-top: 0.2rem solid green;
          width:105px;
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
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/AUS.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="image/DEN.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="image/uk.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br>

<div class="container-fuild">
<div class="row">
  <div class="col-lg-4 abroad-study">
    <hr class="border-top-only">
      <h2 class="text-muted">ABROAD STUDY</h2></hr>
      <p>IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
  </div>
    

 <div class="col-lg-8 row">
  <div class="card red-card col-lg- mx-2 mt-5" style="width:400px">
    <img class="card-img-top mt-5" src="image/AUS.jpg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">AUSTRALIA</h4>
      <p class="card-text text-muted">IELTS, also known as the International English Language Testing System is a universally acknowledged... </p>
      <a href="#" class="btn btn-danger">Read More</a>
    </div>
  </div>
  
  <div class="card red-card col-lg- mx-2 mt-5" style="width:400px">
  
    <img class="card-img-top mt-5" src="image/uk.jpg" alt="Card image" style="width:100%">
    
    <div class="card-body">
      <h4 class="card-title">UNITED KINGDOM</h4>
      <p class="card-text text-muted">The Pearson Test of English (PTE Academic) assesses the Speaking & Writing, Reading and Listening skills...</p>
      <a href="#" class="btn btn-danger">Read More</a>
    </div>
  </div>
  <div class="card red-card col-lg- mx-2 mt-5" style="width:400px">
  
    <img class="card-img-top mt-5" src="image/DEN.jpg" alt="Card image" style="width:100%">
    
    <div class="card-body">
      <h4 class="card-title">UNITED KINGDOM</h4>
      <p class="card-text text-muted">The Pearson Test of English (PTE Academic) assesses the Speaking & Writing, Reading and Listening skills...</p>
      <a href="#" class="btn btn-danger">Read More</a>
    </div>
  </div>
  </div>
  </div>
</div>

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
<div class="container mt-3">
<hr class="border-top-only">
  <h2 class="text-muted">About Us</h2></hr>
  <div class="mt-4 p-5 green-card">
    <div class=row>
    <div class="col-lg-6">
    <h5 class="pb-0">Welcome to</h5> <h2>Success Education Pvt. Ltd</h2>
    
    <p class="text-muted">Success EduCare Pvt. Ltd. (SEC) is one of Nepal’s up-rising education consultancies. Our goal is to support every learner, every learning professional, education institutes and recruitment organizations through our work.

        Incorporated in 2019, SEC has tried to dispel the myths associated with abroad studies by simplifying the procedures through technology resourcing and knowledge consulting with institutions and agencies alike. Till date many students have successfully gone to different countries through our consulting.
    </p> 
    <a href="#" class="btn btn-success">Read More</a>
    </div>
    <div class="card col-lg-6 mt-2"><img src="image/SUCCESS FR(2).jpg" alt=""></div>
    </div>
  </div>
</div>
<br>






<div class="container mt-3">
 
  <div class="mt-4 p-5 green-card">
    <div class=row>
    <div class="card col-lg-6"><img src="image/feature.jpg" alt=""></div>
    <div class="col-lg-6">
    <hr class="border-top-only">
    <h5 class="pb-0">Our features</h5> </hr>
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
    COURSES
    ################################################
-->
<div class="container mt-3">
<hr class="border-top-only">
  <h2 class="text-muted">COURSES</h2></hr>
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
<div class="container mt-3 ">
  
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
  <br>
  
  <!--
    ##############################################
    END TESTOMONIAL
    ################################################

    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>