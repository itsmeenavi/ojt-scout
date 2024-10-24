<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="bannerr">
<a href="index.php">
          <img src="img/ojtscoutlogo.png" alt="logo" style="width:150px;height:70px;padding-left:200px;padding-top:50px;">
      </a>
<div class="signupFrm">
    <form action="login.php" class="form">
      <h1 class="title">Sign up for Interns</h1>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Email</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Name</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Password</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Confirm Password</label>
      </div>
      <label for="formFileLg" class="form-label">Resume/CV: </label> <br>
      <input class="form-control form-control-lg" id="formFileLg" type="file" />
     
      <input type="submit" class="submitBtn" value="Sign up">
      <p class="change_link"> Already have an account?
		    <a href="login.php" class="to_register">Login now!</a>
	</p>
    </form>
  </div>
</div>
</body>
</html>