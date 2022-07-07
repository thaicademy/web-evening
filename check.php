<?php
  session_start();
  $uname = $_POST['username'];
  $pw = $_POST['password'];

  $_SESSION['name'] = 'somkiat';
  $_SESSION['school'] = 'โรงเรียนฝึกอาชีพ';

  if($uname == 'admin' && $pw == '1234'){
      $_SESSION['user'] = $uname;
      header("location: ./dashboard.php");
  }else{
      echo "Username หรือ Password ไม่ถูกต้อง";
      header("location: ./login.php");
  }

?>