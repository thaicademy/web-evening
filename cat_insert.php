<?php
include "connect.php";

$sql = "INSERT INTO tbl_category(cname, cimg) VALUES ('$_POST[cname]', '$_POST[cimg]')";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
  header("location: ./cat_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>