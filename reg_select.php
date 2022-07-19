<?php
include "navbar.php";
include "connect.php";

$sql = "SELECT * FROM tbl_users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?> 
<div class="container">
<table class="table">
<?php
  while($row = mysqli_fetch_assoc($result)) {
?>
 <tr>
     <td><?php echo "$row[firstname] $row[lastname]"; ?></td>
     <td><?php echo "$row[email] "; ?></td>
     <td>  
        <a href="reg_edit.php" class="btn btn-info" > Edit </a>
        <a href="reg_delete.php" class="btn btn-danger" > Delete </a>
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
