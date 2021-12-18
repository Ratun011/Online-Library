<?php 
session_start();
require('includes/config.php');

	$q="select * from news ORDER BY b_id DESC";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="Searchboxstyle.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../Styles/Stylesheet.css" />
		<link rel="stylesheet" href="../Styles/Searchboxstyle.css">
		<link rel="stylesheet" href="../Styles/style.css">
    </head>
    <body>
	<?php
			include("includes/menu.inc.php");
		?>
		<a class="btn">News</a>
      
    </div>
  </header>
  <div class="pimg3">
	<!-- start content -->
	<section class="section section-b">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
			<a href="addnews.php"> <h2 align="left"><font color="lightgreen">Add New News</font><h2></a>
					<table border='0' WIDTH='100%'>
						<tr>
<td WIDTH='5%' style="color:#87ceeb"><b><u>SR.NO</u></b></td>
<TD style="color:#87ceeb" WIDTH='20%'><b><u>TITLE</u></b></TD>
<TD style="color:#87ceeb" WIDTH='60%'><b><u>DESCRIPTION</u></b></TD>
<TD style="color:#87ceeb" WIDTH='30%'><b><u>IMAGE</u></b></TD>
<TD style="color:#87ceeb" WIDTH='35%'><b><u>DELETE</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_desc'];
				echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="process_del_news.php?id='.$row['b_id'].'"><img src="images/drop.png" ></a></td>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		</section>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
