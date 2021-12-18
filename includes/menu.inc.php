<header class="v-header container">
    <div class="fullscreen-video-wrap">
      <video autoplay muted loop>
	  <source src="1.mp4" type="video/mp4">
    </video>
	<video-js autoplay muted loop>
	  <source src="1.mp4" type="video/mp4">
    </video-js>
    </div>
    <div class="header-overlay"></div>
	<div class="header-content">
	</div>			
    <div class="header-content text-md-center">
	<div id="top">
	
<div class="search-box">
    <form action="book.php">
					
					<input type="text" id="s" name="s" value="" />
					<input type="submit" value="search"/>
					
				</form>
    
</div>
	<ul>
	<?php 
					if(isset($_SESSION['status']))
					{
						if($_SESSION['unm']!="admin")
							echo '<li><a href="login.php">'.$_SESSION['unm'].'</a></li>';
						else
							echo '<li><a href="admin/index.php">'.$_SESSION['unm'].'</a></li>';
					}
					else
					{
						echo '<li><a href="login.php">Sign In</a></li>';
					}
					?>
					<li><a href="contact.php">Feedback </a></li>
					<li><a href="AboutUS.php">About Us </a></li>
					<li><a href="News.php">News </a></li>
					<li><a href="book.php">Books</a></li>
                    <li><a href="index.php">Home</a></li>
                </ul>
	</div>