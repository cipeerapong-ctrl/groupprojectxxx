<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    // Create Connaction
    $conn = mysqli_connect($servername,$username,$password,$dbname );

    // Check connection
      if (!$conn){
            die("connection failed" . msqli_connect_error());
      }
?>