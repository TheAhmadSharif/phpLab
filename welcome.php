<?php session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
			<div>
				<h2>Welcome <span class="username"><?php echo $_SESSION["username"]; ?></span> to this priviliged Page.</h2>

				<a href="logout.php">Logout</a>
			</div>  <!-- End -->

			<div>
				<li>
					<a href="https://github.com/TheAhmadSharif/phpLab" target="_blank">Source code</a>
				</li>
				<div>
					Other Projects
					<li><a href="http://exploresylhet.com/PHP-CRUD/index.php" target="_blank">http://exploresylhet.com/PHP-CRUD/</a></li>

					<li><a href="http://exploresylhet.com/Quiz/index.php" target="_blank">http://exploresylhet.com/Quiz/</a></li>
				</div>

				
			</div>  <!-- End -->

			<?php include 'footer.php'; ?>

		
	</div>  <!-- End Container -->
</body>
</html>