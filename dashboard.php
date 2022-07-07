<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
      include "./navbar.php";
    ?>
    <div class="container">
        <h1> ผู้ดูแลระบบ </h1>
         <?php
           echo "$_SESSION[user]";
           echo "Hi ".$_SESSION['name']. "<br/>" ;
           echo "$_SESSION[school]";
         ?>
    </div>  

    <?php
     include "footer.php";
    ?>
    
</body>
</html>