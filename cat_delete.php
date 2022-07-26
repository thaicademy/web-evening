<?php
include "connect.php";
$cid = $_GET[cid];

$sql = "DELETE FROM tbl_category WHERE cid='$cid'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('แก้ไขเรียบร้อย');
            window.location.href='./cat_select.php';
          </script>";
} else {
  echo "ผิดพลาด : " . mysqli_error($conn);
}

mysqli_close($conn);