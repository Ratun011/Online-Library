<?php 
session_start();
require('includes/config.php');

	$q="select * from contact";
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
		<a class="btn">Mail and Query</a>
      
    </div>
  </header>
  <div class="pimg3">
	<!-- start content -->
	<section class="section section-b">
    <div class="container">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%' style="color:#87ceeb"><b>SR.NO</b>
								<TD style="color:#87ceeb" WIDTH='20%'><b>NAME</b>
								<TD style="color:#87ceeb" WIDTH='20%'><b>EMAIL</b>
								<TD style="color:#87ceeb" WIDTH='20%'><b>SUBJECT</b>
								<TD style="color:#87ceeb" WIDTH='50%'><b>QUERY</b>
								<TD style="color:#87ceeb" WIDTH='25%'><b>DELETE</b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td >'.$count.'</td>
										<td>'.$row['con_nm'].'</td>
										<td>'.$row['con_email'].'</td>
										<td>'.$row['con_subject'].'</td>
										<td>'.$row['con_query'].'</td>
										<td><a href="process_del_contact.php?id='.$row['con_id'].'"><img src="images/drop.png" ></a></td>
												
									
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
