<?php
include "koneksi.php";
/*$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$username = $_POST['user_name'];
$password = $_POST['password'];*/


//Mendapatkan Nilai Variable
$name = 'David';
$desg = 'David';
$sal = 1000;

//Pembuatan Syntax SQL
echo $sql = "INSERT INTO tb_pegawai (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";

if(mysqli_query($koneksi,$sql)){
  echo 'Berhasil Menambahkan Pegawai';
}else{
  echo 'Gagal Menambahkan Pegawai';
}

$name = 'David';
$surname = 'Wong';
$age = '11';
$username = 'David123';
$password = 'David123';

//$data = mysqli_query($koneksi,"insert into employee_data (name,surname,age,username,password) values('".$name."','".$surname."','".$age."','".$user_name."','".$password."');");

$mysql_qry = "insert into employee_data (id,name,surname,age,username,password) values('','".$name."','".$surname."','".$age."','".$user_name."','".$password."');";

$data = mysqli_query($koneksi,"select * from employee_data where username ='".$user_name."' and password='".$user_pass."';");





//echo ("select * from employee_data where username ='".$user_name."' and password='".$user_pass."';");
if($koneksi->query($mysql_qry)===TRUE){
  //echo mysqli_num_rows($data);
  echo "INSERT success";
}
else {
  echo "INSERT gagal";
}
?>
