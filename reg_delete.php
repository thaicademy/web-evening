<?php
include "connect.php";
$id = $_GET[id];

$sql = "DELETE FROM tbl_users WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location: ./reg_select.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>