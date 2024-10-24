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
    <a class="navbar-brand" href="home.php">OJT Scout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainings.php">Trainings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="webinars.php">Webinars</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search" action="profile.php">
        <button class="btn btn-outline-light mx-1" type="submit">Profile</button>
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

<div class="container rounded bg-white mt-0 mb-0" style = "margin-right:40rem">
    <div class="row" >
        <div class="col-md-3 border-right" style= "background-color:rgb(221, 221, 221);">
          
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="img/ivhan.jpeg">
            <form action="/action_page.php" style = "margin-left:85px; margin-top:10px;">
              <input type="file" id="myFile" name="filename">
                  </form><br>
                      <span class="font-weight-bold">Ivhan Christopher Manalo. Salazar</span><span class="text-black-50">ivhanchris761@mail.com</span><span> </span>
          </div>
        </div>
        <div class="col-md-5 border-right" style = "">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" placeholder="surname" value="Salazar"></div>
                    <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" class="form-control" value="Manalo" placeholder="middle name"></div>
                    <div class="col-md-12"><label class="labels">Given Name</label><input type="text" class="form-control" value="Ivhan Christopher" placeholder="first name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" placeholder="contact Number" value="09669448658"></div>
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" placeholder="email Address" value="ivhanchris761@gmail.com"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="address" value="336C Venus St. Caniogan, Pasig City"></div>
                    <div class="col-md-12"><label class="labels">Sex</label><!--<input type="text" class="form-control" placeholder="sex" value="Male"> -->  <br>
                    <select id="sex" name="sex" class="minimal" style ="height:35px;width:30.8rem;">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div> 
                    <div class="col-md-12"><label class="labels">Highest Educational Attainment</label><!--<input type="text" class="form-control" placeholder="highest educational attainment" value="Senior high Graduate"></div> -->
                    <select id="civil status" name="civil status" style ="height:35px;width:30.8rem;">
                      <option value="Single">Elementary Gradutate</option>
                      <option value="Married">Junior High School Graduate</option>
                      <option value="Divorced">Senior High School Graduate</option>
                      <option value="Widowed">Graduate</option>
                    </select>
                    <div class="col-md-12"><label class="labels">Civil Status</label><!--<input type="text" class="form-control" placeholder="civil status" value="Single"></div> --><br>
                    <select id="civil status" name="civil status" style ="height:35px;width:30.8rem;">
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Widowed">Widowed</option>
                    </select>
                    <div class="col-md-12"><label class="labels">Employment Status</label><!--<input type="text" class="form-control" placeholder="employment status" value="Student"></div> --> <br>
                    <select id="employment states" name="employment status" style ="height:35px;width:30.8rem; border: thin solid grey;">
                      <option value="Student">Student</option>
                      <option value="Worker">Worker</option>
                      <option value="Employee">Employee</option>
                      <option value="Self-Employed">Self-Employed</option>
                    </select>
                  </div> 
                    <div class="col-md-12"><label class="labels">Birthdate</label><input type="text" class="form-control" placeholder="birthdate" value="November 20, 2001"></div>
                    <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="age" value="20 years old"></div>
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