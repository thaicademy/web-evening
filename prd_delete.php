<?php
include "connect.php";
$id = $_GET['id'];
$img = $_GET['img'];
 
if (file_exists('./images/'.$img)) {
    unlink('./images/'.$img);
    echo 'File '.$img.' has been deleted';
} else {
    echo 'Could not delete '.$img.', file does not exist';
}

$sql = "DELETE FROM tbl_products WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('แก้ไขเรียบร้อย');
            window.location.href='./product.php';
          </script>";
} else {
  echo "ผิดพลาด : " . mysqli_error($conn);
}

mysqli_close($conn); 

?>