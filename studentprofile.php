<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="student_profile.css">
</head>
<body>
  <div class="header">
  <h2>MAULANA AZAD NATIONAL INSTITUTE OF TECHNOLOGY</h2>
  <p>A DEEMED UNIVERSITY</p>
</div>



 <span style="font-size:30px;cursor:pointer" onclick="openNav()">MY ACCOUNT</span>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#">student name</a>
    <a href="#">phn no</a>
    <a href="#">date of birth</a>
    <a href="#">student name</a>
  </div>
</div>
<?php
if(isset($_POST['submit'])|| isset($_GET['page']))
	{
		if(isset($_POST['submit']) &&(isset($_SESSION['scholarno'])||isset($_SESSION['c'])))
			session_destroy();
		$con=mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo "Not connected to server";
	
	}
	 elseif(!mysqli_select_db($con,'dbms'))
	 {
	 	echo 'Database Not Selected';
	}
	else{
		session_start();
		if(!isset($_GET['page']))
		{
			$_SESSION['scholarno']=$_POST['scholarno'];
			$_SESSION['password']=$_POST['password'];
		}
	//$scholarno=$_POST['scholarno'];
	//$password=$_POST['password'];
	$retrive="SELECT *  FROM student WHERE s_id=".$_SESSION['scholarno']." AND password='".$_SESSION['password']."'";
  $array1=mysqli_query($con,$retrive);
  $retrive1="SELECT password FROM student where s_id=".$_SESSION['scholarno']." ";
  $check=mysqli_query($con,$retrive1);
  $check1=mysqli_fetch_assoc($check);
  
  
  //if(mysqli_num_rows($array1)!=0)
  //{//$array1=mysqli_query($con,$retrive);
    //$array=mysqli_fetch_assoc($array1);
  //}
  if(mysqli_num_rows($check)==0)
  	{if(mysqli_num_rows($array1)==0)
  
    {?> <br><?php echo "you dont have any  account";
         header("refresh:3; url=signupstudent.html?account=notpresent");
  
    }}
  elseif(mysqli_num_rows($check)!=0 && $check1['password']!=$_SESSION['password'])
    {?> <br><?php echo "password is incorrect";
header("refresh:3; url=signinstudent.html?wrong password");
}
  if(mysqli_num_rows($check)!=0 && $check1['password']==$_SESSION['password']){
  	// $_SESSION['scholarno']=$scholarno;
  	// $_SESSION['password']=$password;
  	?><form action="logout.php" method="post">
    
        <button type="submit" name="submit">Logout</button>
 </form>
 	<?php
	$sql1="select sem from student where s_id=".$_SESSION['scholarno'];
	$query=mysqli_query($con,$sql1);
	$array2=mysqli_fetch_assoc($query);
	
    
    
    
    	$j=0;
    for($i=1;$i<=6;$i++)
      {
    	
    	 ?> <div class="timeline">
    		<div class=" <?php if($j%2==0)
            echo "container left";
 			else echo "container right";
  			$j++;?>"> <?php
        $c=6*($array2['sem']-1)+$i;
  			$sql2="select sum(classes_taken_by_a_teacher) as totalclasses from teacher_courses where c_id=". $c;
        //echo $sql2;
        $sql3="select cname from courses where c_id=".$c;
        $arr=mysqli_query($con,$sql3);
        $arr1=mysqli_fetch_assoc($arr);
  			$array3=mysqli_query($con,$sql2);
  			$array4=mysqli_fetch_assoc($array3);
        $sql="select * from student s join attendance a on s.s_id=a.s_id where s.s_id=".$_SESSION['scholarno'] ." and c_id=". $c;
        //echo $sql;
        
         $array1=mysqli_query($con,$sql);
        $array=mysqli_fetch_assoc($array1);
  			if($array4['totalclasses']==0)
  				$x=0;
  			else
  				$x=($array['classes_attended']/$array4['totalclasses'])*100;
  			?>
  
  			
    		<div class="content">
    		<h2>courseid<?php echo $array['c_id'] ?></h2><h3>course name:<?php echo $arr1['cname'];?></h3>
    		<ul>
        		<li> attendance
        		 <ul>
        		    <li>classes attended :<?php echo $array['classes_attended'];?></li>
        			<li>total classes:<?php echo $array4['totalclasses'];?></li>
       				<li>classes attended in percentage :<?php echo $x ;?>%</li>
    			 </ul>
        		<li>course details</li>
       			<li>instructor details</li>
      		</ul>
    				


            </div>
  			</div>
  			 </div>
    		<?php	
    		}


    	
   
  
    				
 
}
else{
	session_unset();
}}
}
else
{
	header("refresh:1; url=signinstudent.html?signin=empty");
}
 ?>


<div id="aboutus">
  
  <h2>About us </h2>
</div>
<script type="text/javascript">
  function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</body>
</html>


