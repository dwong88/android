<?php
require "koneksi.php";

$user_name = $_POST['user_name'];
$user_pass = $_POST['password'];

$data = mysqli_query($koneksi,"select * from employee_data where username ='".$user_name."' and password='".$user_pass."';");
//echo ("select * from employee_data where username ='".$user_name."' and password='".$user_pass."';");
if(mysqli_num_rows($data)>0){
  //echo mysqli_num_rows($data);
  echo "login success";
}
else {
  echo "login gagal";
}
?>
