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
		<a class="btn">SIGN UP</a>
      
    </div>
  </header>
  <div class="pimg2">
    <section class="section section-b">
    <div class="container">
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
									<div  class="form">
    		<form id="contactform" action="process_register.php" method="POST">
    			<font color=#87ceeb>Name :</font><br> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" name='fnm'> 
    			 
    			<font color=#87ceeb>Email :</font><br>
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email" name='mail'> 
                
				<font color=#87ceeb>Create a username :</font><br>
                <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text" name='unm'> 
    			 
				 <font color=#87ceeb>Create a password :</font><br>
    			<input type="password" id="password" name="password" required="" name='pwd'> 
				<font color=#87ceeb>Confirm your password :</font><br> 
    			<input type="password" id="repassword" name="repassword" required="" name='cpwd'> 
        
		<font color=#87ceeb>City :</font><br>
               <input id="city" placeholder="city" required="" type="text" name='city'> 
                
  <br><font color=#87ceeb>I am.. :</font><br>
            <select class="select-style gender" name="gender">
            <option value="Male" name="gender" id='m'>Male</option>
            <option value="Female" name="gender" id='f'>Female</option>
            <option value="Other" name="gender" id='o'>Other</option>
            </select><br><br>
            
			<font color=#87ceeb>Mobile phone :</font><br>
            <input id="phone" name="phone" placeholder="phone number" required="" type="text" name='contact'> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>      
										
            </div>
			
            
            <?php
			include("includes/footer.inc.php");
	?>
    </body>
</html>
