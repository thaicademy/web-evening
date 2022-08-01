<?php
include "navbar.php";
include "connect.php";

$sql = "SELECT * FROM tbl_category";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?> 
<div class="container">
<table class="table">
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
 <tr>
     <td><?php echo "<a href='cat_detail.php?cid=$row[cid]'> $row[cname] </a>"; ?></td>
     <td><?php echo "$row[cimg]"; ?></td>
     <td>  
<?php
if($_SESSION['status'] == "admin"){
?>
        <a href="cat_edit.php?cid=<?php echo $row[cid]; ?>" class="btn btn-info" > Edit </a>
        <a href="cat_delete.php?cid=<?php echo $row[cid]; ?>" class="btn btn-danger" > Delete </a>
 <?php } ?>     
        <a href="cat_detail.php?cid=<?php echo $row[cid]; ?>" class="btn btn-primary" > Detail </a>
    </td>
  </tr>
<?php
  }
?>
</table>
</div>
<?php
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
