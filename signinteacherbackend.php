 <?php

if(isset($_POST['submit']) || isset($_GET['page']) || isset($_GET['entry']))
  {if(isset($_POST['submit']))
    session_destroy();
$con=mysqli_connect('127.0.0.1','root','');
  session_start();
 

  if(!$con)
  {
    echo 'Not connected to server';
  }
  elseif($con && !mysqli_select_db($con,'dbms_project'))
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
  
    {echo "you dont have any  account";
         //header("refresh:3; url=signupteacher.php");
  
    }}



    elseif(mysqli_num_rows($check)!=0 && $check1['password']!=$_SESSION['d'])
    {echo "password is incorrect";
//header("refresh:3; url=signinteacher.php");
}
if(mysqli_num_rows($check)!=0 && $check1['password']==$_SESSION['d'])
    {
      // session_start();

      ?><form action="logout.php" method="post">
    
        <button type="submit" name="submit">Logout</button>
 </form>
 <?php

       $sql="SELECT sem,course FROM teacher_courses WHERE t_id=".$_SESSION['c'];
  $query=mysqli_query($con,$sql);
  $array=mysqli_fetch_assoc($query);
  do{?>
  <a href="studentattendance.php?sem=<?php echo $array['sem'];?> & course=<?php echo $array['course'];?> "><?php echo"sem=".$array['sem'] ."  "."course=".$array['course'] ?></a> </br>
  <?php   
  }while ($array=mysqli_fetch_assoc($query)) 

    ;

}

   }}
   else
   {
    //header("refresh:0; url=signinteacher.html?signup=empty");
    echo "tree";
   }



     ?> 