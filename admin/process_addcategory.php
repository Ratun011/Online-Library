<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['cat']))
		{
			$msg.="Please full fill all requirement";
		}
		
		if($msg!="")
		{
			header("location:category.php?error=".$msg);
		}
		else
		{
	
		
			$cat=$_POST['cat'];
			
			$query="insert into category(cat_nm) values('$cat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
			header("location:category.php?ok=1");
		}
	}
	else
	{
		header("location:category.php");
	}
?>
	
	