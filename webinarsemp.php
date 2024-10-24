<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webinars</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- custom.css -->
     <link rel="stylesheet" href="css/custom.css">
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Searchbar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
    <!--start of navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #06113C;">
  <div class="container-fluid">
    <a class="navbar-brand" href="homeemp.php">OJT Scout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homeemp.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainingsemp.php">Trainings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Webinars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="applications.php">Applications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Post</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="profile.php">
        <button class="btn btn-outline-light mx-1" type="submit">Company Profile</button>
      </form>
      <form class="d-flex" role="search" action="index.php">
        <button class="btn btn-outline-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<!--end of navbar-->
<h2 style="margin-left:53rem; margin-top:30px;">Webinars</h2>
<form class="example" action="action_page.php" style = "margin-left:30rem; margin-top:40px; margin-bottom:40px; margin-right:30rem;">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<div class="card" style="width: 50rem; margin:auto; margin-top: 20px; height: 15rem;">
    <div class="row g-0">
        <div class="col-sm-5" style="width: 15rem;">
            <img src="img/webinar1.jpg" class="card-img-top h-100" alt="..." style = "height:12rem; width:12rem; margin-left:2rem; margin-top:15px">
        </div>
        <div class="col-sm-7" >
            <div class="card-body">
                <h5 class="card-title">Basic Web Profile Coding Workshop</h5>
                <p class="card-text">September 10 - 11</p>
                <p class="card-text">1:00pm - 6:00pm</p>
                <a href="https://www.facebook.com/zuittcodingbootcamp/photos/a.565476920297330/2148674868644186/" target="_blank" class="btn btn-primary stretched-link">Go</a>
            </div>
        </div>
    </div>
</div>

<div class="card" style="width: 50rem; margin:auto; margin-top: 20px; height: 15rem; margin-bottom:3rem;">
    <div class="row g-0">
        <div class="col-sm-5" style="width: 15rem;">
            <img src="img/webinar2.png" class="card-img-top h-100" alt="..." style = "height:12rem; width:12rem; margin-left:2rem; margin-top:15px">
        </div>
        <div class="col-sm-7" > 
            <div class="card-body">
                <h5 class="card-title">An Introduction to Cyber Security and its Application in Real Life</h5>
                <p class="card-text">September 21, 2022</p>
                <p class="card-text">2:00pm (GMT +8)</p>
                <a href="https://www.facebook.com/DICTIIDB/photos/a.1475711512688787/3252599401666647/" target="_blank" class="btn btn-primary stretched-link">Go</a>
            </div>
        </div>
    </div>
</div>

<nav style = "margin:auto; margin-left:49rem;">
    <ul class="pagination">
        <li class="page-item"><a href="#" class="page-link">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</nav>

<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2022 Salazar, Ivhan.
                </div>
               
            </div>
        </div>
    </div>


</body>
</html>