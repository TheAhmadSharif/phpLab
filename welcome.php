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
			<h2>Welcome <span class="username"><?php echo $_SESSION["username"]; ?></span> to this priviliged Page.</h2>

			<a href="logout.php">Logout</a>

			<?php include 'footer.php'; ?>

		
	</div>  <!-- End Container -->
</body>
</html>