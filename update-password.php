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

<style type="text/css">
.container {
	width: 760px;
	min-height: 70%;
	min-height: 70vh;
}	
footer {
	width: 760px;
}

.logout > a, .logout > a:visited  {
	background: green;
    padding: 5px 10px;
    color: #fff;
    text-decoration: none;
}

.mtb-20{
	margin-top: 20px !important; 
	margin-bottom: 20px !important;
}

ul {
	margin: 0;
}
.link li {
	margin-bottom: 20px;
}
</style>

</head>
<body>
	<div class="container">
			<div class="content">
				<div>

					<div class="logout">
						<a href="logout.php">Logout</a>
					</div> <!-- End -->

					<div>
						<h2>Welcome <span class="username"><?php echo $_SESSION["username"]; ?></span> to this priviliged Page.</h2>
					</div> <!-- End -->


					
				</div>  <!-- End -->

				<div class="mtb-20">
					<li>
						<a href="https://github.com/TheAhmadSharif/phpLab" target="_blank">Source code</a>
					</li>
					<div class="mtb-20">  <!-- End -->
						<div class="mtb-20">
							Other Projects
						</div> <!-- End -->

						<ul class="link">
							<li><a href="http://exploresylhet.com/PHP-CRUD/index.php" target="_blank">http://exploresylhet.com/PHP-CRUD/</a></li>

							<li><a href="http://exploresylhet.com/Quiz/index.php" target="_blank">http://exploresylhet.com/Quiz/</a></li>
						</ul>
						
						
					</div>  <!-- End -->

					
				</div>  <!-- End -->
			</div>  <!-- End content -->
		
	</div>  <!-- End Container -->
	<?php include 'footer.php'; ?>
</body>
</html>