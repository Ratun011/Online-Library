<?php

	require('includes/config.php');
			$delcat=$_GET['id'];
			
			$query="delete from news where b_id ='$delcat' ";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:news.php");

?>