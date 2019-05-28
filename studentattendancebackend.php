<?php
    if(isset($_POST['submit1']))
	{$dbconnect=mysqli_connect('localhost','root','','dbms');
	if(!$dbconnect)
		echo'error';
	else
	{
		
		session_start();
		$class="select * from   student  where sem=".$_GET['sem'];
		echo $class;
		$fill_sql1="update teacher_courses set classes_taken_by_a_teacher=classes_taken_by_a_teacher +1 where   t_id=".$_SESSION['c']." and c_id=".$_GET['courseid'];
		$fill_query=mysqli_query($dbconnect,$fill_sql1);
		$sql1=mysqli_query($dbconnect,$class);
		$array1=mysqli_fetch_assoc($sql1);
		$value=$_POST['tick'];
	
		
	for ($i=0; $i < count($value); $i++) { 
		# code...
		if($value[$i]==1)
	    {
			for ($j=$i-1; $j <count($value)-1 ; $j++) { 
			# code.
			$value[$j]=$value[$j+1];
			}
		
		$value[$j]=0;
		}
	}
	print_r($value);
	#echo count($array1);

for ($i=0; $i <=count($sql1) ; $i++) { 
	echo $value[$i];
	# code...
}
$i=0;
		
   	do{
					
					if($value[$i]==1)
					{$fill_sql="update attendance set classes_attended=classes_attended+1 where s_id=".$array1['s_id']." and c_id=".$_GET['courseid'];
					$fill_query=mysqli_query($dbconnect,$fill_sql);}
					#echo $array1['course1'];
					$i++;
				}
				while ($array1=mysqli_fetch_assoc($sql1))

	;
}

    header("refresh:0; url=teacher_profile.php?page=back");

}
else{
   echo "not set";
}
?>