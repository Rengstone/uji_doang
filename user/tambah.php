<?php
session_start();
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
    <h1>Form Tambah Mahasiswa</h1>
    <form action="tambah-act.php" method="post">
        Nama : <input type="text" name="nama"><br>
        NIM  : <input type="text" name="nim"><br>
        <button type="submit">Tambah</button>
    </form>    
</body>
</html>