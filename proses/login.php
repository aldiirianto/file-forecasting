<?php
include 'connection.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysqli_query($conn,"SELECT * FROM tbl_user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);
$row= mysqli_fetch_array($sql);
if($cek>0){
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = $row['status'];
  $_SESSION['nama'] = $row['nama'];
  header('Location: ../index.php');
}else {
  header('Location: ../login-page.php?log=err');
}
?>
