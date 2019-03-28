<?php
	$dbconnect=mysqli_connect('localhost','root','','dbms_project');
	#$i=0;
	if(!$dbconnect)
		echo'error';
	
	else
	{
		$class="select * from sem".$_GET['sem']. " join student on scholar_no=scholar_number where semester=".$_GET['sem'];
		echo $class;
		$sql=mysqli_query($dbconnect,$class);
		$array=mysqli_fetch_assoc($sql);
		?><form action="studentattendancebackend.php?sem=<?php echo $_GET['sem'];?>&course=<?php echo $_GET['course'];?>" method="post">
			<table>
				<tr>
					<th>
						name
					</th>
					<th>
						scholarnumber
					</th>
					<th>
						attendance
					</th>	
				</tr>	
			
				<?php
				do{
					?><tr><td><?php
					echo $array['fname']." ".$array['lname'];
				    ?></td>
				    
				    	<td><?php
				    		echo $array['scholar_no'];?>
				    	</td>
				    	<td>
				    		<input type="hidden" name="tick[]" value="0" >
				    		<input type="checkbox" name="tick[]" id="tick[]" value='1' />

				    	</td>
				    </tr><?php
				    #$i++;
				}
				while ($array=mysqli_fetch_assoc($sql))
				
		    
				;?>

		    

	       </table>
	       <input type="submit" name="v1" value ="submit" />
	      </form><?php
	}

?>