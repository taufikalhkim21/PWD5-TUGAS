<?php
include 'MODEL/koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM film");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu Film</title>
</head>
<body>
<h2>Tambah Film</h2>

<form action="MODEL/crud.php" method="POST">
    <input type="text" name="judul" placeholder="Judul" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <input type="text" name="durasi" placeholder="Durasi" required>
    <button type="submit" name="tambah">Tambah</button>
</form>

<hr>

<h2>Daftar Film</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Harga</th>
        <th>Durasi</th>
        <th>ACTION</th>
    </tr>

    <!-- TAMPIL -->
    <?php while ($film = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $film['id']; ?></td>
            <td><?= $film['judul']; ?></td>
            <td>Rp<?= $film['harga']; ?></td>
            <td><?= $film['durasi']; ?></td>
            <td>
                <!-- Form Edit -->
            <form action="MODEL/crud.php" method="POST" style="display:inline;">
                <input type="hidden" name="id" value="<?= $film['id']; ?>">
                <input type="text" name="judul" value="<?= $film['judul']; ?>">
                <input type="number" name="harga" value="<?= $film['harga']; ?>">
                <input type="text" name="durasi" value="<?= $film['durasi']; ?>">
                <button type="submit" name="edit">Edit</button>
            </form>
            </td>
            <td>
                <a href="MODEL/crud.php?hapus=<?= $film['id']; ?>"
                   onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>