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
	$email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$branch=$_POST['branch'];
	$semester=$_POST['semester'];
	$degree=$_POST['degree'];
	$password=$_POST['password'];
	$retrive="SELECT *FROM student1 where email='$email' and password='$password'";
	$array1=mysqli_query($con,$retrive);


	if(mysqli_num_rows($array1)==0)

	{$sql="INSERT INTO student1 (email/*,fname,lname,branch,semester,degree_enrolled*/,password)VALUES('$email',/*'$fname','$lname','$branch','$semester','$degree',*/'$password')";
	$array=mysqli_query($con,$sql);
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	//header("refresh:3; url=signupstudent.html");
	}else
	{
		echo 'You already have an account';
	
		//header("refresh:3; url=");
	}
?>