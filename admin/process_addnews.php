
<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['description']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
        else if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg = "<li>wrong file  image";
	
		
		if($msg!="")
		{
			header("location:addnews.php?error=".$msg);
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$b_img = "upload_image/".$_FILES['img']['name'];	
		
			$b_nm=$_POST['name'];
			$b_desc=$_POST['description'];
		
			
			$query="insert into news(b_nm,b_desc,b_img)
			values('$b_nm','$b_desc','$b_img')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addnews.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	