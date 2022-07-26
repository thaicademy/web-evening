<?php
  include "navbar.php";
  include "connect.php";
  $cid = $_GET['cid'];
  $sql = "SELECT * FROM tbl_category WHERE cid='$cid'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result)
?>

<div class="container">
    <h2> <?php echo"$row[cname] "; ?></h2>
    <p> <?php echo"$row[cimg]";  ?> </p>
</div>

<?php
  include "footer.php";
?>