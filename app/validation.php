<?php

session_start();
$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "select * from usertable where name = '$name' && password = '$pass' ";
$result = mysqli_query ($con, $sql);
$number = mysqli_num_rows ($result);

if($number == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('location:login.php'); 

}
?>