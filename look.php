<?php
include "config.php"; // koneksi database

// Ambil data dari tabel
$sql = "SELECT * FROM pendaftaran ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftaran VTuber</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>📋 Data Pendaftaran VTuber</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alias</th>
            <th>Tanggal Lahir</th>
            <th>Domisili</th>
            <th>Channel</th>
            <th>Link</th>
            <th>Genre</th>
            <th>Pengalaman</th>
            <th>Avatar</th>
            <th>Inspirasi</th>
            <th>Model</th>
            <th>Voice</th>
            <th>Musik</th>
            <th>Edit</th>
            <th>Bahasa</th>
            <th>Setuju</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['alias']."</td>
                        <td>".$row['lahir']."</td>
                        <td>".$row['domisili']."</td>
                        <td>".$row['CHANNEL']."</td>
                        <td>".$row['link']."</td>
                        <td>".$row['genre']."</td>
                        <td>".$row['pengalaman']."</td>
                        <td>".$row['avatar']."</td>
                        <td>".$row['inspirasi']."</td>
                        <td>".$row['model']."</td>
                        <td>".$row['voice']."</td>
                        <td>".$row['musik']."</td>
                        <td>".$row['edit']."</td>
                        <td>".$row['bahasa']."</td>
                        <td>".($row['setuju'] ? "✔️" : "❌")."</td>
                        <td>".$row['created_at']."</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='19'>Belum ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>
