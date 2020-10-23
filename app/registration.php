<?php

session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "select * from usertable where name = '$name' ";
$result = mysqli_query ($con, $sql);
$number = mysqli_num_rows ($result);

if($number == 1) {
    echo " Username Already Taken ";
} else {
    $reg = "insert into usertable(name ,password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo " Registration Successful ";
}
?>
