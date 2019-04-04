<?php
    if(isset($_POST['submit1']))
	{$dbconnect=mysqli_connect('localhost','root','','dbms_project');
	if(!$dbconnect)
		echo'error';
	else
	{
		//$class="select * from sem".$_GET['sem']." join student on scholar_no=scholar_number where semester=".$_GET['sem'];
		session_start();
		$class="select * from sem".$_GET['sem']. " join student3 on scholarno=scholar_number where semester=".$_GET['sem'];
		echo $class;
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
					{$fill_sql="update sem".$_GET['sem']. " set course".$_GET['course']. "=course".$_GET['course']. "+1 where scholar_number=".$array1['scholar_number'];
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