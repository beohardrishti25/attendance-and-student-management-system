<?php
  $con=mysqli_connect('127.0.0.1','root','');

  if(!$con)
  {
    echo 'Not connected to server';
  }
  if(!mysqli_select_db($con,'dbms_project'))
  {
    echo 'Database Not Selected';
  }

  
  $a=$_GET['v1'];
  $b=$_GET['v2'];
  $c=$_GET['v3'];
  $d=filter_input(INPUT_GET, 'v4');
  
  $retrive="SELECT *  FROM teacher WHERE t_id=".$c." AND password='".$d."'";
  
  $array1=mysqli_query($con,$retrive);
  
  if(mysqli_num_rows($array1)!=0)
  {
    $array=mysqli_fetch_assoc($array1);
  }
  if(mysqli_num_rows($array1)==0)
  {
    echo "sorry,you have not chosen any course";
  }
  else
  {
    
    $sql="SELECT sem,course FROM teacher_courses WHERE t_id=".$c;
  $query=mysqli_query($con,$sql);
  $array=mysqli_fetch_assoc($query);
  do{?>
  <a href="studentattendance.php?sem=<?php echo $array['sem'];?> & course=<?php echo $array['course'];?>"><?php echo"sem=".$array['sem'] ."  "."course=".$array['course'] ?></a> </br>
  <?php   
  }while ($array=mysqli_fetch_assoc($query)) 

    ;
   }   ?>