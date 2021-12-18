<?php

	require('includes/config.php');
			$delcat=$_GET['id'];
			
			$query="delete from contact where con_id ='$delcat' ";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>