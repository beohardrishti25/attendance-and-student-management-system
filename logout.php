<?php
session_start();
	if(isset($_POST['submit']) && (isset($_SESSION['d']))|| isset($_SESSION['password']) )
	{
		session_unset();
		session_destroy();
		//header("refresh:4; url=index.html");
		echo 'logged out';
		header("refresh:0; url=frontpage.html?logged out");
	}
	else
	{
		echo "not destroyed";
	}


?>