<?php session_start();
	require('includes/config.php');
	
	$Id=$_GET['Id'];
	
	$q="select * from book where b_id=$Id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<?php
if($Id==1)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==2)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==3)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==4)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==5)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==6)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==7)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==8)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==9)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==10)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==11)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==12)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==13)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==14)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==15)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==16)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==17)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==18)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==19)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==20)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==21)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==22)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==23)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==24)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==25)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==26)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==27)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==28)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==29)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==30)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==31)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==32)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==33)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==34)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==35)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==36)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==37)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==38)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==39)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==40)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==41)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==42)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==43)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==44)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==45)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==46)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==47)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==48)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==49)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if(Id==50)
	echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
else if($Id==55)
echo "<iframe src=\"\A\upload_ebook/LearnJava.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";

?>
