<?php
include "connect.php";

$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_products(name, description, price, stock, category, img) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[price]', '$_POST[stock]', '$_POST[category]', '$filename' )";

if (mysqli_query($conn, $sql)) {
  move_uploaded_file($tempname, $folder);  //อับโหลดไฟล์   
  echo "บันทึกเรียบร้อย";
  header("location: ./product.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>