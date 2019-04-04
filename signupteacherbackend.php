<?php 
	if(isset($_POST['submit']))
	{if(isset($_SESSION['scholarno'])||isset($_SESSION['c']))
			session_destroy();
		$con=mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo "Not connected to server";
	}
	
	 if(!mysqli_select_db($con,'dbms_project'))
	 {
	 	echo 'Database Not Selected';
	}
	$email=$_POST['username'];
	 $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	//$branch=$_POST['branch'];
	//$semester=$_POST['semester'];
	//$course=$_POST['course'];
	$t_id=$_POST['t_id'];
	$password=$_POST['password'];
	$value=$_POST['sem1'];
	//$value1=2;
	//$value2=7;
	//$value2=$_POST['sem2'];
	$retrive="SELECT *FROM teacher where t_id='$t_id' and password='$password'";
	$array1=mysqli_query($con,$retrive);
	$retrive1="SELECT password FROM teacher where t_id='$t_id' ";
	$check=mysqli_query($con,$retrive1);
	$check1=mysqli_fetch_assoc($check);

	if(mysqli_num_rows($check)==0 )
	{
	if(mysqli_num_rows($array1)==0)

	{$sql="INSERT INTO teacher(fname,lname,t_id,password)VALUES('$fname','$lname','$t_id','$password')";
	//$array=mysqli_query($con,$sql);
	for($i=0;$i<=1;$i++){
		$j=$i+1;
		$sql1="INSERT INTO teacher_courses(t_id,sem,course)VALUES('$t_id','$j','$value[$i]')";
		mysqli_query($con,$sql1);
	}
	if(mysqli_query($con,$sql))
	{
		echo '  Inserted';
		session_start();
		$_SESSION['c']=$t_id;
		$_SESSION['d']=$password;
         header("refresh:5; url=teacher_profile.php?page=set");
	}
	}}
	elseif(mysqli_num_rows($check)!=0 && $check1['password']!=$password)
		{echo "choose different teacherid";
      header("refresh:3; url=signupteacher.php");
}
	if(mysqli_num_rows($check)!=0 && $check1['password']==$password)
		{echo "already account";
		session_start();
		$_SESSION['c']=$t_id;
		$_SESSION['d']=$password;
         header("refresh:5; url=teacher_profile.php?page=set");
}
}else{

	header("refresh:1; url=signupteacher.php?submit=empty");

}
?>