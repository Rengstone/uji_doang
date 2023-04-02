<?php
session_start();
include '../config/koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "delete from tb_mahasiswa where id = '$id'");
header("location:index.php");
?>