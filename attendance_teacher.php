
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="attendance_teacher.css">
</head>
<body>

<div id="myDIV" class="header">
  <h2 style="margin:5px">sem=<?php echo $_GET['sem'] ?> and courseid=<?php echo $_GET['courseid'] ?>and coursename=<?php echo $_GET['coursename'] ?></h2>
</div>
<?php
  $dbconnect=mysqli_connect('localhost','root','','dbms');
  #$i=0;
  if(!$dbconnect)
    echo'error';
  
  else
  {
    session_start();
    //$class="select * from sem".'$_GET['sem']'." join student on scholar_no=scholar_number where semester=".$_GET['sem'];
    //$class="select * from sem".$_GET['sem']. " join student on scholar_no=scholar_number where semester=".$_GET['sem'];
     ?><form action="logout.php" method="post">
    
        <button type="submit" name="submit">Logout</button>
         </form>
         <?php
    $class="select * from student where sem=".$_GET['sem'];
    //echo $class;
    $sql=mysqli_query($dbconnect,$class);
    $array=mysqli_fetch_assoc($sql);
    ?>
    <form action="studentattendancebackend.php?sem=<?php echo $_GET['sem'];?>&courseid=<?php echo $_GET['courseid'];?>" method="post">
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
                echo $array['s_id'];?>
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
         <input type="submit" name="submit1" value ="submit" />
        </form><?php
  }

?>






<!-- <ul id="myUL">
  <li>student 1</li>
  
</ul>
 -->
<script>

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>

</body>
</html>
