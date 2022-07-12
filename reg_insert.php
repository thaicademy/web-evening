<?php
include "connect.php";

$sql = "INSERT INTO tbl_users (firstname, lastname, email, username, password )
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[username]', '$_POST[password]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("location: ./reg_select.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>