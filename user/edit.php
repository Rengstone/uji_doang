<?php
session_start();
include '../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "select * from tb_mahasiswa where id = '$id'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Edit Mahasiswa</h1>
    <form action="edit-act.php?id=<?php echo $id; ?>" method="post">
        Nama : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        NIM  : <input type="text" name="nim" value="<?php echo $data['nim'] ?>"><br>
        <button type="submit">Edit</button>
    </form>    
</body>
</html>