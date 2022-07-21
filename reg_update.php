<?php
include "connect.php";

$sql = "UPDATE tbl_users SET 
          username='$_POST[username]',
          password='$_POST[password]', 
          firstname='$_POST[firstname]',
          lastname='$_POST[lastname]',  
          email='$_POST[email]'           
       WHERE id='$_POST[id]'";

if (mysqli_query($conn, $sql)) {
  echo "แก้ไขเรียบร้อย";
  header("location: ./reg_select.php");
} else {
  echo "ผิดพลาด: " . mysqli_error($conn);
}

mysqli_close($conn);
?>