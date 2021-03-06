<?php
require_once "_login.php";
 
$username = $password = "";
$username_err = $password_err =  "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $flag = 0;
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);


    if (preg_match_all('/^[a-zA-Z]{4,20}$/', $username)) {
         $flag = $flag + 1;
     } 
     else {
        $flag = 0;
        $username_err = "Please put a valid username";
     }



     if (preg_match_all('/^[a-zA-Z0-9]{4,20}$/', $password)) {
         $flag = $flag + 1;
        } 
     else {
        $flag = 0;
        $password_err = "Please put a valid password";
     }

    
  
    $sql = "SELECT id FROM User WHERE username = ?";
    $stml = $mysqli->prepare($sql);

    $stml->bind_param("s", $username);
    if ($flag==2) {
            $stml->execute();
            $stml->store_result();

             if($stml->num_rows == 1){
                $username_err = "This username is already taken.";
            } 
            else{

                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                $sql_insert = "INSERT INTO User (username, password) VALUES (?, ?)";
                $stml_insert = $mysqli->prepare($sql_insert);
                $stml_insert->bind_param("ss", $username, $password_hash);

                $stml_insert->execute();


                $username = $password = "";
                $username_err = $password_err =  "";
                echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
                exit;



                $stml_insert->close();


                    

            }
    }



    $mysqli->close();
 
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-title">
                   Signup
            </div> <!-- End Form Title -->
            <div class="help-block"></div>
            <div>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  

            <div>
                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="password">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div>
                <input type="submit" class="btn" value="Signup">
            </div>

            <div>
                <p>Already have account? <a href="login.php">Login</a></p> 
            </div>
        </form>
    </div>     <!-- End Container -->
    <?php include 'footer.php'; ?>
</body>
</html>


