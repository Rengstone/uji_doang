<?php
session_start();
include '../cek.php';
include '../config/koneksi.php';
$sql = mysqli_query($conn, "select * from tb_mahasiswa");
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
    <h1>Selamat Datang Admin</h1>
    <a href="tambah.php">Tambah Mahasiswa</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Opsi</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($sql)) {
            $id = $data['id'];
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>

        <a href="logout.php">logout</a>
    </table>
</body>
</html>