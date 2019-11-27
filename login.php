<?php session_start(); ?>

<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo "<script type='text/javascript'> document.location = 'welcome.php'; </script>";
    exit;
};

require_once "_login.php";
$username = $password = "";
$username_err = $password_err = $error_message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){ 

	     $sql = "SELECT id, username, password FROM User WHERE username = ?";


            if(empty(trim($_POST["username"]))){
		        $username_err = "Please enter username.";
		    } else{
		        $username = trim($_POST["username"]);
		    }

		    if(empty(trim($_POST["password"]))){
		        $password_err = "Please enter your password.";
		    } else{
		        $password = trim($_POST["password"]);
		    }


		    $hashed_password = $_POST['password'];

	      if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("s", $username);
            
            
            if($stmt->execute()){
                $stmt->store_result();
                
                if($stmt->num_rows == 1){                    
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            session_start();

                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;   
                            echo "<script type='text/javascript'> document.location = 'welcome.php'; </script>";
                				exit;
                        } else{
                            $error_message = 'Username or password did not match.';
                        }
                    }
                } 
                else {
	            	$error_message = 'Username or password did not match.';
	            }
            } 
        	else {
            	$error_message = 'Username or password did not match.';
            }
            
        $stmt->close();
    }
    
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-title">
					Login
				</div> <!-- End Form Title -->
				<span class="help-block"><?php echo $error_message; ?></span>
				<input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
				

				<input type="password" name="password" placeholder="password">

				<div class="">
	                <input type="submit" class="btn" value="Login">
	            </div>

	            <div>
	                <p>Does not have any account? <a href="index.php">Register</a></p> 
	            </div>

		</form>
	</div>  <!-- End container -->
	<?php include 'footer.php'; ?>
</body>
</html>