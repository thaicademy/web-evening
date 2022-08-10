<?php
include "connect.php";

$sql = "SELECT * FROM tbl_products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?> 
<div class="container">
<table class="table">
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
 <tr>
     <td> <?php echo "<a href='prd_detail.php?id=$row[id]'> $row[name] </a>"; ?></td>
     <td> <?php echo "$row[description]"; ?> </td>
     <td> <?php echo "$row[price]"; ?> </td>
     <td> <?php echo "$row[stock]"; ?> </td>
     <td> <?php echo "$row[cactegory]"; ?> </td>
     <td> <?php echo "$row[img]"; ?> </td>
     <td>  
<?php
if($_SESSION['status'] == "admin"){
?>
        <a href="prd_edit.php?id=<?php echo $row[id]; ?>" class="btn btn-info" > Edit </a>
        <a href="prd_delete.php?id=<?php echo $row[id]; ?>" class="btn btn-danger" > Delete </a>
 <?php } ?>     
        <a href="prd_detail.php?id=<?php echo $row[id]; ?>" class="btn btn-primary" > Detail </a>
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
