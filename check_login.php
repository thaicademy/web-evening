<?php
  session_start();
  include "connect.php";
 // $sql = "SELECT * FROM tbl_users WHERE 
 //        username='$_POST[username]' and password='$_POST[password]' ";
  $sql = "SELECT * FROM tbl_users";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if($row['username'] == $_POST['username'] && $row[password] == $_POST['password']){
      $_SESSION['username'] = $row['username'];
      header("location: ./dashboard.php");
  }else{
     echo "<script>
             alert('Username หรือ Password ไม่ถูกต้อง');
             window.location.href='./login.php';
           </script>";
  }

?>