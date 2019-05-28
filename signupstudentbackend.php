<?php 
if(isset($_POST['submit']))
	{
		if(isset($_SESSION['scholarno']) ||isset($_SESSION['c']))
		   session_destroy();
		$con=mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo "Not connected to server";
	}
	
	 if(!mysqli_select_db($con,'dbms'))
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
	$scholarno=$_POST['scholarno'];
	//echo $scholarno;
		$retrive="SELECT * FROM student where s_id='$scholarno'and password='$password' ";
	$array1=mysqli_query($con,$retrive);
	$retrive1="SELECT password FROM student where s_id='$scholarno' ";
	$check=mysqli_query($con,$retrive1);
	$check1=mysqli_fetch_assoc($check);
	//echo $check1['password'];
	if(mysqli_num_rows($check)==0 )
		

	{if(mysqli_num_rows($array1)==0)

	{$sql="INSERT INTO student(email,fname,lname,branch,sem,degree,password,s_id)VALUES('$email','$fname','$lname','$branch','$semester','$degree','$password','$scholarno')";
	// $array=mysqli_query($con,$sql);
	//$sql1="insert into sem".$semester." (scholar_number,course1,course2)values('$scholarno','$i','$i')";
	for($i=0;$i<6;$i++)
	{	$j=6*($semester-1)+1+$i;
		$k=0;
		$sql1="insert into attendance(c_id,s_id,classes_attended)values('$j','$scholarno','$k')";
		mysqli_query($con,$sql1);
	}
	//echo $sql1;
	//mysqli_query($con,$sql1);
	if(mysqli_query($con,$sql) )
	{
		echo 'Inserted';
		session_start();
		$_SESSION['scholarno']=$scholarno;
		$_SESSION['password']=$password;
        header("refresh:0; url=studentprofile.php?page=set");
	}
	
	
	}}
	elseif(mysqli_num_rows($check)!=0 && $check1['password']!=$password)
		{echo "password is incorrect";
header("refresh:0; url=signupstudent.html?incorrect password");
}
	if(mysqli_num_rows($check)!=0 && $check1['password']==$password)
		{echo "already account";
		session_start();
		$_SESSION['scholarno']=$scholarno;
		$_SESSION['password']=$password;
         header("refresh:5; url=studentprofile.php?page=set");
         
}
}
else{
	header("refresh:0; url=signupstudent.html?submit=empty");
}
		
?>