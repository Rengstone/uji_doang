<?php
session_start();
include '../config/koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

$sql = mysqli_query($conn, "update tb_mahasiswa set nama = '$nama', nim = '$nim' where id = '$id'");
header("location:index.php");
?>