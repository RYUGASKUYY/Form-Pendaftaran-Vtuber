<?php
include "config.php"; // koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama       = $_POST['nama'] ?? '';
    $email      = $_POST['email'] ?? '';
    $alias      = $_POST['alias'] ?? '';
    $lahir      = $_POST['lahir'] ?? '';
    $domisili   = $_POST['domisili'] ?? '';
    $channel    = $_POST['channel'] ?? '';
    $link       = $_POST['link'] ?? '';
    $genre      = $_POST['genre'] ?? '';
    $pengalaman = $_POST['pengalaman'] ?? '';
    $avatar     = $_POST['avatar'] ?? '';
    $inspirasi  = $_POST['inspirasi'] ?? '';
    $model      = $_POST['model'] ?? '';
    $voice      = $_POST['voice'] ?? '';
    $musik      = $_POST['musik'] ?? '';
    $edit       = $_POST['edit'] ?? '';
    $bahasa     = $_POST['bahasa'] ?? '';
    $setuju     = isset($_POST['setuju']) ? 1 : 0;

    // Query simpan data
    $sql = "INSERT INTO pendaftaran 
            (firstname, lastname, email, alias, lahir, domisili, channel, link, genre, pengalaman, avatar, inspirasi, model, voice, musik, edit, bahasa, setuju)
            VALUES 
            ('$nama', '', '$email', '$alias', '$lahir', '$domisili', '$channel', '$link', '$genre', '$pengalaman', '$avatar', '$inspirasi', '$model', '$voice', '$musik', '$edit', '$bahasa', '$setuju')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Data berhasil disimpan!";
        echo "<br><a href='look.php'>Lihat Data</a>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
