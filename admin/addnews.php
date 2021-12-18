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
		<a class="btn">Add News</a>
      
    </div>
  </header>
  <div class="pimg3">
	<!-- start content -->
	<section class="section section-b">
	<div id="content">
		<div class="post" style="margin-left:100px">
			<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="green">Your anews is successfully uploaded..</font>';
												echo '<br><br>';
											}
										
										?>
			<div class="entry" >
				<form action='process_addnews.php' method='POST' enctype="multipart/form-data">
				
						<br><b><font color=#87ceeb>News Title: </font></b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						
						<b><font color=#87ceeb>Description: </font></b><br><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
			
						
						<b><font color=#87ceeb>Image: </font></b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
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
