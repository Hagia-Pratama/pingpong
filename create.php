<?php
include('koneksi.php');

$table_name = 'tb_leaderboard';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $scorepemain = $_POST['scorepemain'];
    $scoremusuh = $_POST['scoremusuh'];

    $sql = "INSERT INTO $table_name (id_pemain, username, scorepemain, scoremusuh) VALUES (NULL, '$username', $scorepemain, $scoremusuh)";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record created successfully.";
    } else {
        http_response_code(400);
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>