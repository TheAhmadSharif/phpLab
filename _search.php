<!DOCTYPE html>
<html>
<head>
	<title>:: Search</title>
</head>
<body>
	<?php 
		require_once('_es');
	?>
	<form action="index.php" method="get" autocomplete="off">
		<input type="text" name="search" placeholder="search ... ">
		<button type="submit"> Submit</button>
	</form>
</body>
</html>