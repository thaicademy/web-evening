<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  $_SESSION['name'] = 'somkiat';
  $_SESSION['school'] = 'โรงเรียนฝึกอาชีพ';

  if($username == 'admin' && $password == '1234'){
      $_SESSION['username'] = $username;
      header("location: ./dashboard.php");
  }else{
     echo "<script>
           alert('Username หรือ Password ไม่ถูกต้อง');
           window.location.href='./login.php';
          </script>";
  }

?>