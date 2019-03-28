<html> 
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
  

