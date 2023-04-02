<?php
session_start();
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "select * from tb_user where username = '$username' and password = '$password'");

if (mysqli_num_rows($sql) == 1) {
    $_SESSION['username'] = $username;
    header('location:user/');
}else{
    header('location:index.php');
}
?>