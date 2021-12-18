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
		<a class="btn">Request/Feedback/Ask Questions</a>
      
    </div>
  </header>
  <div class="pimg2">
    <section class="section section-b">
    <div class="container">
  <h2><br>Query</h2>
	  	
										<form action="process_contact.php" method="POST">
												

											<br><font color=#87ceeb>Name :</font><br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												<font color=#87ceeb>E-mail ID:</font><br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												<font color=#87ceeb>Subject: </font><?php 
					if(!isset($_SESSION['status']))
					{
						echo '<font color=#ffffff><br></h6>(Login For More Options)</h6></font>';
					}
					?><br>
												
													<select style="width: 195px;" name="type">
													<?php 
					if(isset($_SESSION['status']))
					{
						echo '<option>Request For Books';
						echo '<option>Giving My Book For Upload';
					}
					?>
															<option>Give Us Feedback
															<option>Ask For Help
														
													</select>
													
												<br>
												<br>
												<font color=#87ceeb>Query:</font><br><br>
												<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									
      
		<br><br>
    </div>
  </section>
  </div>

									
									
									
								
						<?php
			include("includes/footer.inc.php");
	?>
</body>
</html>
