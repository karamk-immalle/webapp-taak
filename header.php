<?php session_start(); ?>
<nav>
	<a href="page1.php">Page1</a>
	<a href="page2.php">Page2</a>
	<a href="about.php">About</a>
	<?php
	if(isset($_SESSION['logged_in'])){
		echo '<a href="logout.php" style="text-align: right;">' . 'Logout' . '</a>';
	}else{
		echo '<a href="login.php" style="text-align: right;">'. 'Login' . '</a>';	
	}
	?>
</nav>
