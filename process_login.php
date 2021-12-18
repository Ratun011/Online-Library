<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
	    if(empty($_POST['usernm'])&& empty($_POST['pwd']))
	    {
		    $msg.="<li>Please full fill all requirement";
	    }
		else if(empty($_POST['usernm']))
		{
			$msg.="<li>Please full fill username...";
		}
		
		else if(empty($_POST['pwd']))
		{
			$msg.="<li>Please full fill password...";
		}
		if($msg!="")
		{
			header("location:login.php?error=".$msg);
		}
		else
		{	
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['u_pwd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:index.php");
					}
				}
				
				else
				{
					$msg.="<li>Incorrect Password....";
				}
			}
			else
			{
				$msg.="<li>Invalid User....";
			}
			if($msg!="")
		{
			header("location:login.php?error=".$msg);
		}
		}
	}
	else
	{
		header("location:login.php");
	}
			
?>