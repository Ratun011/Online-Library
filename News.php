<?php
require('includes/config.php');
 session_start();
 
	 $query="select *from news ORDER BY b_id DESC";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
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
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
		<link rel="stylesheet" href="Styles/Searchboxstyle.css">
		<link rel="stylesheet" href="Styles/style.css">
    </head>
    <body>
	<?php
			include("includes/menu.inc.php");
		?>
		<a class="btn">News</a>
      
    </div>
	<div class="hi"><?php
			include("includes/logo.inc.php");
		?></div>
  </header>
              <div class="pimg2">
    <section class="section section-b">
    <div class="container">
    <table border="0" width="100%" >
											<?php
												while($row=mysqli_fetch_assoc($res))
												{
													
													
													echo '<td valign="top" width="20%" align="center">
														<img src="'.$row['b_img'].'" width="80" height="100" align="left">
														<b><h3> <font color=#87ceeb>'.$row['b_nm'].'</font></h3></b><font color=#ffffff>'.$row['b_desc'].'</font><br><br><br><br><br><br><br>
													</td>';
																				
													
													
														echo '</tr>';
													
													
												}
											?>
											
										</table>
  </div>
  </section>
  </div>

									
									
									
								
						<?php
			include("includes/footer.inc.php");
	?>
</body>
</html>

  