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
		<a class="btn">Add Books</a>
      
    </div>
  </header>
  <div class="pimg3">
	<!-- start content -->
	<section class="section section-b">
	<div id="content">
		<div class="post" style="margin-left:100px">
			<div class="entry" >
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
				
						<br><b><font color=#87ceeb>Book Name: </font></b><br>
						<input type='text' name='name' size='40'>
						<br><br>
						
						<b><font color=#87ceeb>Category: </font></b><br>
						<select  name="cat">
								<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
								?>
						</select>
						<br><br>
						
						<b><font color=#87ceeb>Description: </font></b><br><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b><font color=#87ceeb>Publisher: </font></b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						
						<b><font color=#87ceeb>Edition: </font></b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b><font color=#87ceeb>ISBN: </font></b><br>
						<input type='text' name='isbn' size='40'>
						<br><br>
						
						<b><font color=#87ceeb>PAGES: </font></b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<b>E-Book:</b><br>
						<input type='file' name='ebook'  size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
			</div>
			
		</div>
		
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
