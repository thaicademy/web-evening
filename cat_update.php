<?php
include "connect.php";

$sql = "UPDATE tbl_category SET 
          cname='$_POST[cname]',
          cimg='$_POST[cimg]'
       WHERE cid='$_POST[cid]'";

if (mysqli_query($conn, $sql)) {
  echo "<script>
          alert('แก้ไขเรียบร้อย');
          window.location.href='./cat_select.php';
        </script>";
} else {
  echo "ผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>