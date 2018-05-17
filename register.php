<?php
include "koneksi.php";
//print_r($_POST);
$name = $_POST['user_name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$username = $_POST['username'];
$password = $_POST['password'];

/*
$name = 'Dave';
$surname = 'Dave';
$age = '11';
$username = 'Dave';
$password = '12312';*/

//$data = mysqli_query($koneksi,"insert into employee_data (name,surname,age,username,password) values('".$name."','".$surname."','".$age."','".$user_name."','".$password."');");

$mysql_qry = "insert into employee_data (name,surname,age,username,password) values('".$name."','".$surname."','".$age."','".$username."','".$password."');";

$data = mysqli_query($koneksi,$mysql_qry);


//echo ("select * from employee_data where username ='".$user_name."' and password='".$user_pass."';");
if($data===TRUE){
  //echo mysqli_num_rows($data);
  echo "INSERT success";
}
else {
  echo "INSERT gagal";
}
?>
