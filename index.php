<?php 
      session_start();
      include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
   <div class="homeheader">
      <h2>Home</h2>
   </div>
   
   <div class="homecontent">
   <?php if (isset($_SESSION['error'])) : ?>
         <div class="error">
             <h3>
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);                
                ?>
             </h3>  
         </div>
      <?php endif ?>

        <?php if (isset($_SESSION['username'] )) :?>
            <p> wellcom <stong><?php echo $_SESSION ['username'] ; ?></stong></p>
            <p> <a href="index.php? logout='1'" style="color: red" ;>log out</a></p>
            <?php endif ?>
        </div>
</body>
</html>