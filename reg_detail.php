<?php
  include "navbar.php";
  include "connect.php";
  $id = $_GET['id'];
  $sql = "SELECT * FROM  tbl_users WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result)
?>

<div class="container">
    <h2> <?php echo"$row[firstname]  $row[lastname]"; ?></h2>
    <p> <?php echo"$row[email]";  ?> </p>
</div>

<?php
  include "footer.php";
?>