<?php 

	 $color = test_input('\\white ');

	  echo $color;

	  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

     

?>
