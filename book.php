<?php
require('includes/config.php');
 session_start();
 if (isset($_GET['s'])) {
	$search=$_GET['s'];
	
	$query="select *from book where b_nm like '%$search%'";
 }
 else{
	 $query="select *from book";
 }
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="Searchboxstyle.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
		<link rel="stylesheet" href="Styles/Searchboxstyle.css">
		<link rel="stylesheet" href="Styles/style.css">
    </head>
    <body>
	<?php
			include("includes/menu.inc.php");
		?>
		<a class="btn">Books</a>
      
    </div>
  </header>
              <div class="pimg2">
    <section class="section section-b">
    <div class="container">
			
			<!-- start page -->
				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="0" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br><font color=#87ceeb>'.$row['b_nm'].'</font></a><br><br><br><br>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
				</div>
				</div>
				</section>
			<!-- end page -->
			
			<?php
			include("includes/footer.inc.php");
	?>
</body>
</html>
