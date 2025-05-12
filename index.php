<?php
require_once 'Film.php';
$film = new Film();
$data = $film->getAllFilms();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Film Koleksi</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php while ($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_film']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['genre']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['rating']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
