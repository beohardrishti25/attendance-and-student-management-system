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
	$retrive="SELECT *FROM student where email_id='$email' and password='$password'";


	if(!mysqli_query($con,$retrive))

	{$sql="INSERT INTO student(email_id,fname,lname,branch,semester,degree_enrolled,password)VALUES('$email','$fname','$lname','$branch','$semester','$degree','$password')";
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