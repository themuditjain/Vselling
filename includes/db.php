<?php
        // Create connection
        $con = mysqli_connect('localhost','root','','vselling');

        // Check connection
        if (!$con) {
          die("Connection failed: " . !$con);
        }

?>
