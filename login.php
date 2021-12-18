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
		<section class="What Is New">
    <div class="top">
	<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="green">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
		<?php
						require('includes/config.php');
							
							
								echo '<form action="process_login.php" method="POST">
										<h2>Log In</h2>
											<b>Username : </b>
											<input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password : </b>
											<input type="password" name="pwd">
											<br><br>
											<input type="submit" value="  Login  " >
										</form>';
							
						
						?>
						<div id="top2">
						If You Dont have an account, <a href="register.php"><font color="#87ceeb"><b>Register here:</font></b></a>
						</div>
      
    </div>
	</section>
  </header>
				<?php
			include("includes/footer.inc.php");
	?>
</body>
</html>