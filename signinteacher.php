<!-- <html> 
  <head>
    <title>signinteacher</title>
    <script type="text/javascript">
      function resetForm(id) {
       $('#'+id).each(function(){
           this.reset();
    });
}



    </script>
  </head>
  <body>
    <h1>Sign In</h1>
    <form method="get" action="signinteacherbackend.php">
	FName <input type="text" name="v1" value="Name" /><br />
  LName <input type="text" name="v2" value="Name" /><br />
  teacher id <input type="text" name="v3" value="" /><br />
	Password <input type="Password"  name="v4" value="" /><br />
  
	<input type="submit" name="v5" value="submit" /><br />
  <input type="button" name="reset_form" value="Reset Form" onclick="this.form.reset();">
    </form>
  </body>
  </html>
  

 -->
 <!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="gallery.css">
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
      <a class="navbar-brand" href="navbar.html">Xception</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
   
        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery</a></li>
        <li><a href="#"><i class="fas fa-book-open"></i> About</a></li>
        <li><a href="#"><i class="far fa-address-book"></i> Contact</a></li>
    
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signinstudent.html"><i class="fas fa-user"></i> LogIn</a></li>
        <li><a href="signupstudent.html"><i class="fas fa-user-plus"></i> SignUp</a></li>

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
  <h2>Log In</h2>
  <hr>
  <form action="signinteacherbackend.php" method="get">
    <div class="form-group">
    <label for="t_id">Teacher Id</label>
    <input type="text" class="form-control" id ="t_id" name="v3" placeholder="teacher id" required><br>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" required title="5 to 10 characters" required><br>
    <p class="help-block">*atleast one uppercase, one lowercase, one digit and length[5,10]</p>
    </div>
    
    <label for="remember"><input type="checkbox" name="remember">Keep me logged in</label><br>
    <button class="btn btn-primary btn-primary btn-sm">Login</button>
    <hr>
  </form>
  </div>
</div>
</body>
</html>