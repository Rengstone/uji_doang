<?php
session_start();
include '../config/koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

$sql = mysqli_query($conn, "insert into tb_mahasiswa values(null, '$nama', '$nim')");
header("location:index.php");
?>