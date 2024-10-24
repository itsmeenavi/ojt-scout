<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- custom.css -->
     <link rel="stylesheet" href="css/custom.css">

    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
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
          <a class="nav-link" href="webinarsemp.php">Webinars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="applications.php">Applications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Post</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="profileemp.php">
        <button class="btn btn-outline-light mx-1" type="submit">Company Profile</button>
      </form>
      <form class="d-flex" role="search" action="index.php">
        <button class="btn btn-outline-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<!--end of navbar-->

<!--end of akin
<div class="mb-3" style="width: 50rem; margin:auto; margin-top:10px;">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input class="form-control" type="text" value="ivhanchris761@gmail.com" aria-label="Disabled input example" disabled readonly>
</div>

<div class="mb-3" style="width: 50rem; margin:auto; margin-top:10px;">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input class="form-control" type="text" value="Salazar, Ivhan Christopher M." aria-label="Disabled input example" disabled readonly>
</div>

-->

<div class="container rounded bg-white mt-0 mb-0" style = "margin-right:40rem; ">
    <div class="row" >
        <div class="col-md-3 border-right" style= "background-color:rgb(221, 221, 221);">
          
            <div class="d-flex flex-column align-items-center text-center p-3 py-5" style = "margin-bottom:26rem;"><img class="rounded-circle mt-5" width="150px" src="img/xiaomi.png">
            <form action="/action_page.php" style = "margin-left:85px; margin-top:10px;  ">
              <input type="file" id="myFile" name="filename">
                  </form><br>
                      <span class="font-weight-bold">Xiaomi- Megamall</span><span class="text-black-50">service.in@xiaomi.com</span><span> </span>
          </div>
        </div>
        <div class="col-md-5 border-right" style = "">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Company Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    
                    <div class="col-md-12"><label class="labels">Company Name</label><input type="text" class="form-control" value="Xiaomi - Megamall" placeholder="first name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Company Number</label><input type="text" class="form-control" placeholder="contact Number" value=" 0932 223 6889"></div>
                    <div class="col-md-12"><label class="labels">Company Email Address</label><input type="text" class="form-control" placeholder="email Address" value="service.in@xiaomi.com"></div>
                    <div class="col-md-12"><label class="labels">Location</label><input type="text" class="form-control" placeholder="address" value="Mandaluyong, Metro Manila"></div>
                    <div class="col-md-12"><label class="labels">Date Established</label><input type="text" class="form-control" placeholder="birthdate" value="April 6, 2010"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="Philippines"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="National Capital Region" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>



<!-- copyright -->
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