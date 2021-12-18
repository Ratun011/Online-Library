<header class="v-header container">
    <div class="fullscreen-video-wrap">
      <video src="../1.mp4" autoplay="" loop="">
    </video>
    </div>
    <div class="header-overlay"></div>
	<div class="header-content">
	</div>			
    <div class="header-content text-md-center">
	<div id="top">
	<div class="search-box2">
    <form action="book.php">
					
					<input type="text" id="s" name="s" value="" />
					<input type="submit" value="search"/>
					
				</form>
    
</div>
	<ul>
	<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Register</a></li>';
				}
			?>
					<li><a href="news.php">News</a></li>
					<li><a href="contact.php">Mail</a></li>
					<li><a href="all_book.php">Books</a></li>
					<li><a href="subcategory.php">Sub_Category</a></li>
					<li><a href="category.php">Category</a></li>
                    <li class="current_page_item"><a href="../index.php">Home</a></li>
                </ul>
	</div>