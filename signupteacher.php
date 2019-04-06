
<!DOCTYPE html>
<html>
<head>
  <title>SIGNUP</title>
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gallery.css">
  <style type="text/css">
    input[type="radio"]{
  margin: 0 10px 0 10px;
}


  </style>
  <script type="text/javascript" >var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="frontpage.html">MANIT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
   
        <!-- <li><a href="frontpage.html"><i class="fas fa-home"></i> Home</a></li> -->
        <li><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery</a></li>
        <li><a href="#"><i class="fas fa-book-open"></i> About</a></li>
        <li><a href="#"><i class="far fa-address-book"></i> Contact</a></li>
    
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="loginpage.html"><i class="fas fa-user"></i> LogIn</a></li>
        <li><a href="signup.html"><i class="fas fa-user-plus"></i> SignUp</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



  

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<div class="container">

  <div class="jumbotron">
  <h2>Sign Up</h2>
  <hr>
  <form action="signupteacherbackend.php" method="post">
    <div class="form-group">
    <label for="fname">First Name </label>
    <input type="text" class="form-control" id ="fname" name="fname" required><br>
    </div>
    <div class="form-group">
    <label for="lname">Last Name </label>
    <input type="text" class="form-control" id ="lname" name="lname" required><br>
    </div>
   
    
    
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id ="email" name="username" placeholder="Email" required><br>
    </div>
    <div class="form-group">
    <label for="schno">Teacher ID </label>
    <input type="text" class="form-control" id ="schno" name="t_id" placeholder="eg. 141116081" required><br>
    </div>
<br>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select courses for Semester 1</label>
  </div>
  
  <select class="btn-sm"  class="custom-select" name="sem1[]" class="form-control" id="branch" required><br>
    <option selected value=0>Choose...</option>
    <option value="1">BEEE</option>
    <option value="2">Chemistry</option>
    <option value="3">Environmental Studies</option>
    <option value="4">Basic Mechanical Engineering</option>
    <option value="5">Solid Mechanics</option>
    <option value="6">Maths1</option>
  </select>

</div>
<br>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select courses for Semester 2</label>
  </div>

  <select class="btn-sm"  class="custom-select" name="sem1[]" class="form-control" id="branch" required><br>
    <option selected value=0>Choose...</option>
    <option value="1">C Programming</option>
    <option value="2">Physics</option>
    <option value="3">Communication</option>
    <option value="4">ED</option>
    <option value="5">Civil Engineering</option>
    <option value="6">Maths2</option>
  </select>

</div>
<br>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select courses for Semester 3</label>
  </div>

  <select class="btn-sm"  class="custom-select" name="sem1[]" class="form-control" id="branch" required><br>
     <option selected value=0>Choose...</option>
    <option value="1">PPL</option>
    <option value="2">Digital Electronics</option>
    <option value="3">Digital Communication</option>
    <option value="4">Discrete Structure</option>
    <option value="5">Data Structure</option>
    <option value="6">Linear Algebra</option>
  </select>

</div>
<br>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select courses for Semester 4</label>
  </div>

  <select class="btn-sm"  class="custom-select" name="sem1[]" class="form-control" id="branch" required><br>
    <option selected value=0>Choose...</option>
    <option value="1">DBMS</option>
    <option value="2">TOC</option>
    <option value="3">ADA</option>
    <option value="4">Probability and queing theory</option>
    <option value="5">Software Engineering</option>
    <option value="6">Computer Architecture</option>
  </select>

</div>
<br>
    <div class="form-group">
    <label for="password">Enter Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required title="5 to 10 characters" required><br>

    <p class="help-block">*atleast one uppercase, one lowercase, one digit and length[5,10]</p>
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
    <span id='message'></span>
    <br>
    <label for="remember"><input type="checkbox" name="remember">Keep me logged in</label><br>
    <button class="btn btn-primary btn-primary btn-sm" type="submit" name="submit">SignUp</button>
    <hr>
  </form>
  </div>
</div>
</body>
</html>