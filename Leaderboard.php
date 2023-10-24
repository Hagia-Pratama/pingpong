<?php
require_once('koneksi.php');

$query = "SELECT * FROM tb_leaderboard"; // Memperbaiki sintaks query
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Gagal: " . mysqli_error($koneksi));
}

// Jangan lupa menutup koneksi setelah selesai
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        /* CSS untuk mengatur tampilan tabel dan kolom */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: blue;
            color: white;
            text-align: center;
        }

        /* CSS untuk mengatur tampilan kolom Score Pemain */
        .score-pemain {
            text-align: center;
        }

        /* CSS untuk mengatur tampilan tombol Back */
        .center-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Leaderboard</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th class="score-pemain">Score Pemain</th>
                                <th>Score Musuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                              <tr>
                                <td><?php echo $row['id_pemain'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td class="score-pemain"><?php echo $row['scorepemain'] ?></td>
                                <td><?php echo $row['scoremusuh'] ?></td>
                              </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="center-button">
    <button><a href="Mainmenu.html">back</a></button></div>
</body>
</html>
