<?php session_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #474849;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}


.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}


.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}


.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 100%;
  z-index: 1;
}


.left {
  left: 0;
}


.right {
  left: 50%;
}


.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}


.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}


.right::after {
  left: -16px;
}

.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}


@media screen and (max-width: 600px) {
  
  .timeline::after {
  left: 31px;
  }
  

  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }


  .left::after, .right::after {
  left: 15px;
  }
  
  
  .right {
  left: 0%;
  }
}
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
</head>
<?php if(isset($_POST['submit']) || isset($_GET['page']) || isset($_GET['entry']))
  {$con=mysqli_connect('127.0.0.1','root','');
  //session_start();
 

  if(!$con)
  {
    echo 'Not connected to server';
  }
  elseif($con && !mysqli_select_db($con,'dbms'))
  {
    echo 'Database Not Selected';
  }

  else{
 // $a=$_GET['v1'];
  //$b=$_GET['v2'];
  //session_start();

 if(!isset($_GET['page']))
  {$_SESSION['c']=$_POST['v3'];
  $_SESSION['d']=$_POST['password'];}

  
  
  $retrive="SELECT *  FROM teacher WHERE t_id=".$_SESSION['c']." AND password='".$_SESSION['d']."'";
  $array1=mysqli_query($con,$retrive);
  $retrive1="SELECT password FROM teacher where t_id=".$_SESSION['c']." ";
  $check=mysqli_query($con,$retrive1);
  $check1=mysqli_fetch_assoc($check);
  //echo $check1['password'];
  if(mysqli_num_rows($check)==0 )
  
  {if(mysqli_num_rows($array1)==0)
  
    {header("refresh:3; url=signupteacher.html?no account");
    ?> <br> <br><br><?php echo "you dont have any  account";
     //session_unset();
    // session_destroy();
    // echo "destroyed";
         //header("refresh:3; url=signupteacher.php");
  
    }}
    elseif(mysqli_num_rows($check)!=0 && $check1['password']!=$_SESSION['d'])
    {  header("refresh:3; url=signinteacher.html?incorrect password");
      ?> <br><?php 
      echo "password is incorrect";
      //session_unset();
  //   session_destroy();
  // echo "destroyed";
    }
if(mysqli_num_rows($check)!=0 && $check1['password']==$_SESSION['d'])
    {
      // session_start();

      ?><body>
  <div class="header">
  <h2>MAULANA AZAD NATIONAL INSTITUTE OF TECHNOLOGY</h2>
  <p>A DEEMED UNIVERSITY</p>
</div>

<div id="navbar">
  <a class="active" href="javascript:void(0)">MY ACCOUNT</a>
  <a href="news.html">News</a>
  <a href="events.html">Events</a>
  <a href="#aboutus">About us</a>
</div>
<div id="overlay" onclick="off()">
  <div id="text">TEACHER PROFILE</div>
</div>
      <div style="padding:20px">
  <h2>teacher name</h2>
  <button onclick="on()" >my details</button>
</div>


      <div style="padding:20px">
        <form action="logout.php" method="post">
    
        <button type="submit" name="submit">Logout</button>
 </form>
  
</div><!-- <form action="logout.php" method="post">
    
        <button type="submit" name="submit">Logout</button>
 </form> -->
 <?php

       $sql="SELECT t.c_id AS c_id,c.cname AS cname,c.sem AS sem  FROM teacher_courses t JOIN courses c ON t.c_id=c.c_id WHERE t.t_id=".$_SESSION['c'];
       //echo $sql;
  $query=mysqli_query($con,$sql);
  $array=mysqli_fetch_assoc($query);
  $i=0;
  do{if($array['c_id']!=0) {?>
    <div class="timeline">
  <div class=" <?php if($i%2==0)
  echo "container left";
  else echo "container right";
  $i++;
  ?>">
    <div class="content">
      <h3>CourseName: <?php echo $array['cname']; ?></h3>
      <ul>
        <li><a href="attendance_teacher.php?courseid=<?php echo $array['c_id'];?> & coursename=<?php echo $array['cname'];?> & sem=<?php echo $array['sem']; ?>"><?php echo"sem=".$array['sem'] ."  "."courseid=".$array['c_id'] ?></a> </br></li>
        <li>course details</li>
      </ul>
    </div>
  </div>
  
  <?php   
 } }while ($array=mysqli_fetch_assoc($query)) 

    ;

}
else
{session_unset();
}


   }}
   else
   {
    header("refresh:0; url=signinteacher.html?signin=empty");
    echo "tree";
   }



     ?> 

<script type="text/javascript">
  function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</body>
</html>
