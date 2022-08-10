<?php
include "connect.php";

$sql = "INSERT INTO tbl_products(name, description, price, stock, category, img) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[price]', '$_POST[stock]', '$_POST[category]', '$_POST[img]' )";

if (mysqli_query($conn, $sql)) {
  echo "บันทึกเรียบร้อย";
  header("location: ./product.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>