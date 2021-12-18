<?php
require('includes/config.php');
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['subcat']) || empty($_POST['parent']))
		{
			$msg.="Please full fill all requirement";
		}
		
		if($msg!="")
		{
			header("location:subcategory.php?error=".$msg);
		}
		else
		{
		
			
		
			$parent = $_POST['parent'];
			$subcat=$_POST['subcat'];
			
			$query="insert into subcat(parent_id, subcat_nm) values('$parent','$subcat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
			
			header("location:subcategory.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	